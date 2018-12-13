using System;
using System.Collections.Generic;
using System.Diagnostics;
using System.IO;
using System.Linq;
using System.Net;
using System.Threading.Tasks;
using CsvHelper;
using Microsoft.Azure.Documents;
using Microsoft.Azure.Documents.Client;
using Microsoft.Azure.WebJobs;
using Microsoft.Azure.WebJobs.Host;
using Microsoft.Extensions.Logging;
using Newtonsoft.Json;
using TSLR.Domain.Extensions;
using TSLR.Domain.Models;

namespace TSLR.SchoolSync
{
    public static class SchoolSyncFunction
    {
        private static string GetKeyVaultCosmosDbUrl() => Environment.GetEnvironmentVariable("KEYVAULT_COSMOSDBURL");
        private static string GetKeyVaultCosmosDbPrimaryKey() => Environment.GetEnvironmentVariable("KEYVAULT_COSMOSDBPK");

        private static DocumentClient client;

        [FunctionName("SchoolSyncFunction")]
        public static async Task Run([TimerTrigger("0 0 12 * * *", RunOnStartup = true)] TimerInfo myTimer, ILogger log)
        {
            var downloadPath = Path.Combine(Path.GetPathRoot(Environment.GetFolderPath(Environment.SpecialFolder.System)), "Temp");

            log.Log(LogLevel.Trace, $"C# Timer trigger function executed at: {DateTime.Now}");
            var currentDate = DateTime.Now.ToString("yyyyMMdd");
            try
            {
                Directory.CreateDirectory(downloadPath);
                using (var client = new WebClient())
                {
                    client.DownloadFile(
                        $"http://ea-edubase-api-prod.azurewebsites.net/edubase/edubasealldata{currentDate}.csv",
                        Path.Combine(downloadPath, "cschoolData.csv"));
                }
                log.Log(LogLevel.Trace, $"Downloaded CSV: {DateTime.Now}");

            }
            catch (Exception e)
            {
                log.Log(LogLevel.Critical, $"Download failed. Exception {e}. \n {e.StackTrace}");
                return;
            }


            try
            {
                log.Log(LogLevel.Trace, $"Connect and setup CosmosDb: {DateTime.Now}");
                CreateDocumentClient();
                await client.CreateDatabaseIfNotExistsAsync(new Database { Id = "SchoolsDB" });
                await client.CreateDocumentCollectionIfNotExistsAsync(UriFactory.CreateDatabaseUri("SchoolsDB"),
                    new DocumentCollection { Id = "SchoolCollection" });
            }
            catch (Exception e)
            {
                log.Log(LogLevel.Critical, $"Cosmos setup failed. Exception {e}. \n {e.StackTrace}");
                return;
            }
            var settings = new JsonSerializerSettings();
            settings.DateFormatString = "DD-MM-YYYY";
            settings.DateParseHandling = DateParseHandling.DateTime;
            settings.DateTimeZoneHandling = DateTimeZoneHandling.Local;
            settings.ContractResolver = new CustomSchoolContractResolver();
            using (StreamReader sr = new StreamReader(Path.Combine(downloadPath, "cschoolData.csv")))
            {
                log.Log(LogLevel.Trace, $"Loading CSV: {DateTime.Now}");
                try
                {
                    var csv = new CsvReader(sr);
                    foreach (var line in csv.GetRecords<dynamic>())
                    {
                        string jsonString = JsonConvert.SerializeObject(line);
                        School schoolJson = JsonConvert.DeserializeObject<School>(jsonString, settings);
                        await UpsertSchoolDocumentIfNotExists("SchoolsDB", "SchoolCollection", schoolJson);
                    }
                }
                catch (Exception e)
                {
                    log.Log(LogLevel.Critical, $"School ETL failed. Exception {e}. \n {e.StackTrace}");
                    return;
                }
            }
        }

        private static void CreateDocumentClient()
        {
            client = new DocumentClient(new Uri(GetKeyVaultCosmosDbUrl()), GetKeyVaultCosmosDbPrimaryKey());
        }

        private static async Task UpsertSchoolDocumentIfNotExists(string databaseName, string collectionName,
            School school)
        {
            try
            {
                await client.UpsertDocumentAsync(UriFactory.CreateDocumentCollectionUri(databaseName, collectionName),
                    school, disableAutomaticIdGeneration: true);
            }
            catch (DocumentClientException de)
            {
                if (de.StatusCode == HttpStatusCode.NotFound)
                {
                }
                else
                {
                    throw;
                }
            }
        }
    }
}