using Newtonsoft.Json;
using System;
using System.Collections.Generic;

namespace TSLR.Domain.Configuration
{
    public class SchoolSettings
    {
        [JsonProperty(PropertyName = "id")]
        public string Id { get; set; }
        public List<int> ValidLaCodes { get; set; }
        public List<int> SENSchools { get; set; }
        public List<int> PhaseCodes { get; set; }
    }
}
