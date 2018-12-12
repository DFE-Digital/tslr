using System;
using System.Collections.Generic;
using System.Fabric;
using System.Linq;
using System.Runtime.InteropServices;
using System.Security;
using System.Threading;
using System.Threading.Tasks;
using Microsoft.Azure.Documents.Client;
using Microsoft.Azure.Documents.Linq;
using Microsoft.ServiceFabric.Services.Communication.Runtime;
using Microsoft.ServiceFabric.Services.Remoting.Runtime;
using Microsoft.ServiceFabric.Services.Runtime;
using NinjaNye.SearchExtensions;
using TSLR.Domain.Configuration;
using TSLR.Domain.Models;
using TSLR.Domain.Services;

namespace TSLR.SchoolService
{
    /// <summary>
    /// An instance of this class is created for each service instance by the Service Fabric runtime.
    /// </summary>
    internal sealed class SchoolService : StatelessService, ISchoolService
    {
        private string GetKeyVaultCosmosDbUrl = "";
        private string GetKeyVaultCosmosDbPrimaryKey = "";
        private readonly string _databaseName = "SchoolsDB";
        private readonly string _collectionName = "SchoolCollection";
        private DocumentClient client;
        FeedOptions queryOptions = new FeedOptions { MaxItemCount = -1 };

        public SchoolService(StatelessServiceContext context)
            : base(context)
        {
            ConfigurationPackage configPackage = this.Context.CodePackageActivationContext.GetConfigurationPackageObject("Config");
            GetKeyVaultCosmosDbPrimaryKey = SecureStringToString(configPackage.Settings.Sections["CosmosDB"].Parameters["PrimaryKey"].DecryptValue());
            GetKeyVaultCosmosDbUrl = SecureStringToString(configPackage.Settings.Sections["CosmosDB"].Parameters["Uri"].DecryptValue());
        }

        /// <summary>
        /// Optional override to create listeners (e.g., TCP, HTTP) for this service replica to handle client or user requests.
        /// </summary>
        /// <returns>A collection of listeners.</returns>
        protected override IEnumerable<ServiceInstanceListener> CreateServiceInstanceListeners()
        {
            return this.CreateServiceRemotingInstanceListeners();
        }

        /// <summary>
        /// This is the main entry point for your service instance.
        /// </summary>
        /// <param name="cancellationToken">Canceled when Service Fabric needs to shut down this service instance.</param>
        protected override async Task RunAsync(CancellationToken cancellationToken)
        {
            // TODO: Replace the following sample code with your own logic 
            //       or remove this RunAsync override if it's not needed in your service.

            long iterations = 0;
            ConnectDocumentClient();
            while (true)
            {
                cancellationToken.ThrowIfCancellationRequested();

                ServiceEventSource.Current.ServiceMessage(this.Context, "Working-{0}", ++iterations);

                await Task.Delay(TimeSpan.FromSeconds(1), cancellationToken);
            }
        }

        public async Task<List<School>> GetSchools()
        {
            var schools = new List<School>();
            var queryable = client.CreateDocumentQuery<School>(UriFactory.CreateDocumentCollectionUri(_databaseName, _collectionName),
                queryOptions).AsDocumentQuery();
            while (queryable.HasMoreResults)
            {
                var response = await queryable.ExecuteNextAsync<School>();
                schools.AddRange(response);
            }

            return schools;
        }

        public async Task<School> GetSchoolByName(string name)
        {
            return await Task.FromResult(client.CreateDocumentQuery<School>(UriFactory.CreateDocumentCollectionUri(_databaseName, _collectionName),
                queryOptions).FirstOrDefault(c =>
                string.Equals(c.Name, name, StringComparison.InvariantCultureIgnoreCase)));
        }

        public async Task<List<School>> GetSchoolsByName(string search)
        {
            List<School> schools = new List<School>();
            var queryable = client.CreateDocumentQuery<School>(
                UriFactory.CreateDocumentCollectionUri(_databaseName, _collectionName),
                queryOptions).Search(x => x.Name.ToLower()).Containing(search.ToLower()).Take(25).AsDocumentQuery();
            while (queryable.HasMoreResults)
            {
                var response = await queryable.ExecuteNextAsync<School>();
                schools.AddRange(response);
            }

            return schools;
        }

        public async Task<School> GetSchoolById(int id)
        {
            var schools = await Task.FromResult(client.CreateDocumentQuery<School>(
                UriFactory.CreateDocumentCollectionUri(_databaseName, _collectionName),
                queryOptions).Where(c => c.Id == id.ToString()).ToList());
            return schools.First();
        }

        public async Task<bool> ValidateSchoolEligible(School school)
        {
            var configs = await Task.FromResult(client.CreateDocumentQuery<SchoolSettings>(
                UriFactory.CreateDocumentCollectionUri(_databaseName, _collectionName),
                queryOptions).Where(c => c.Id == "Settings").ToList());
            var config = configs.First();
            if (ValidLASchool(config, school))
            {
                if (IsSecondarySchool(config, school) || IsSENSchool(config, school))
                {
                    return true;
                }
            }
            return false;
        }

        public async Task<bool> ValidateSENSchool(School school)
        {
            var configs = await Task.FromResult(client.CreateDocumentQuery<SchoolSettings>(
                UriFactory.CreateDocumentCollectionUri(_databaseName, _collectionName),
                queryOptions).Where(c => c.Id == "Settings").ToList());
            var config = configs.First();
            if (ValidLASchool(config, school))
            {
                if (IsSENSchool(config, school))
                {
                    return true;
                }
            }
            return false;
        }

        private bool IsSecondarySchool(SchoolSettings config, School school)
        {
            return config.PhaseCodes.Contains(school.PhaseCode);
        }

        private bool IsSENSchool(SchoolSettings config, School school)
        {
            return config.SENSchools.Contains(school.TypeCode);
        }
        private bool ValidLASchool(SchoolSettings config, School school)
        {
            return config.ValidLaCodes.Contains(school.LACode);
        }

        private void ConnectDocumentClient()
        {
            client = new DocumentClient(new Uri(GetKeyVaultCosmosDbUrl), GetKeyVaultCosmosDbPrimaryKey);
        }

        private string SecureStringToString(SecureString value)
        {
            IntPtr bstr = Marshal.SecureStringToBSTR(value);

            try
            {
                return Marshal.PtrToStringBSTR(bstr);
            }
            finally
            {
                Marshal.FreeBSTR(bstr);
            }
        }
    }
}
