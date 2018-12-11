using System;
using Newtonsoft.Json;

namespace TSLR.Domain.Models
{
    public class School
    {
        public string Name { get; set; }
        [JsonProperty(PropertyName = "id")]
        public string Id { get; set; }
        public int LACode { get; set; }
        public int TypeCode { get; set; }
        public int PhaseCode { get; set; }
        public string PhaseName { get; set; }
        public string Street { get; set; }
        public string Locality { get; set; }
        public string Town { get; set; }
        public string PostCode { get; set; }
        public string CloseDate { get; set; }
        public string Status { get; set; }
    }
}
