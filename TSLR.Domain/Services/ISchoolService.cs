using System;
using System.Collections.Generic;
using System.Threading.Tasks;
using Microsoft.ServiceFabric.Services.Remoting;
using TSLR.Domain.Models;

namespace TSLR.Domain.Services
{
    public interface ISchoolService : IService
    {   
        Task<List<School>> GetSchools();
        Task<School> GetSchoolByName(string name);
        Task<List<School>> GetSchoolsByName(string name);
        Task<bool> ValidateSchoolEligible(School school);
        Task<School> GetSchoolById(int id);
        Task<bool> ValidateSENSchool(School school);
    }
}
