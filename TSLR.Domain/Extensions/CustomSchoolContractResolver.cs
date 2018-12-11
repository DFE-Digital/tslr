using System;
using System.Collections.Generic;
using Newtonsoft.Json.Serialization;

namespace TSLR.Domain.Extensions
{
    public class CustomSchoolContractResolver : DefaultContractResolver
    {
        private Dictionary<string, string> PropertyMappings { get; set; }

        public CustomSchoolContractResolver()
        {
            this.PropertyMappings = new Dictionary<string, string>
        {
            {"Name", "EstablishmentName"},
            {"id", "URN"},
            {"LACode", "LA (code)"},
            {"TypeCode", "TypeOfEstablishment (code)"},
            {"PhaseCode", "PhaseOfEducation (code)"},
            {"PhaseName", "PhaseOfEducation (name)"},
            {"Street","Street"},
            {"Locality", "Locality"},
            {"Town", "Town"},
            {"PostCode", "PostCode"},
            {"CloseDate", "CloseDate"},
            {"Status","EstablishmentStatus (code)"}
        };
        }

        protected override string ResolvePropertyName(string propertyName)
        {
            string resolvedName = null;
            var resolved = this.PropertyMappings.TryGetValue(propertyName, out resolvedName);
            return (resolved) ? resolvedName : base.ResolvePropertyName(propertyName);
        }
    }
}