using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Http;
using Microsoft.AspNetCore.Mvc;
using Microsoft.ServiceFabric.Services.Client;
using Microsoft.ServiceFabric.Services.Communication.Client;
using Microsoft.ServiceFabric.Services.Remoting.Client;
using TSLR.Domain.Models;
using TSLR.Domain.Services;

namespace TSLR.API.Controllers
{
    [Route("api/[controller]")]
    [ApiController]
    public class SchoolsController : ControllerBase
    {
        private ISchoolService _schoolService;

        public SchoolsController()
        {
            _schoolService = ServiceProxy.Create<ISchoolService>(
                new Uri("fabric:/TSLR/TSLR.SchoolService"));

            _schoolService = ServiceProxy.Create<ISchoolService>(new Uri("fabric:/TSLR/TSLR.SchoolService"));
        }

        // GET api/values
        [HttpGet]
        public async Task<ActionResult<IEnumerable<School>>> Get()
        {
            return Ok(await _schoolService.GetSchools());
        }

        [HttpGet("search")]
        public async Task<ActionResult<IEnumerable<School>>> Get([FromQuery] string name)
        {
            return Ok(await _schoolService.GetSchoolsByName(name));
        }

        [HttpGet("  ")]
        public async Task<ActionResult<School>> GetSchoolById([FromQuery] int id)
        {
            return Ok(await _schoolService.GetSchoolById(id));
        }

        // GET api/values/5
        [HttpGet("valid")]
        public async Task<ActionResult<bool>> GetValidSchool([FromQuery] string name)
        {

            var school = await _schoolService.GetSchoolByName(name);
            if (school != null)
            {
                return await _schoolService.ValidateSchoolEligible(school);
            }

            return NotFound();
        }

        // GET api/values/5
        [HttpGet("{id}/valid")]
        public async Task<ActionResult<bool>> GetValidSchool(int id)
        {

            var school = await _schoolService.GetSchoolById(id);
            if (school != null)
            {
                return Ok(await _schoolService.ValidateSchoolEligible(school));
            }

            return NotFound();
        }

        // GET api/values/5
        [HttpGet("{id}/sen")]
        public async Task<ActionResult<bool>> GetSENSchool(int id)
        {

            var school = await _schoolService.GetSchoolById(id);
            if (school != null)
            {
                return Ok(await _schoolService.ValidateSENSchool(school));
            }

            return NotFound();
        }

        // POST api/values
        [HttpPost]
        public void Post([FromBody] string value)
        {
        }

        // PUT api/values/5
        [HttpPut("{id}")]
        public void Put(int id, [FromBody] string value)
        {
        }

        // DELETE api/values/5
        [HttpDelete("{id}")]
        public void Delete(int id)
        {
        }
    }
}