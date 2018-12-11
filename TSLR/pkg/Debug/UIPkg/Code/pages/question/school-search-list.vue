<template>
  <section class="container">
    <nuxt-link :to="{ path: 'school-search'}" class="govuk-back-link">
      Back
    </nuxt-link>
    <main id="main-content" class="govuk-main-wrapper app-main-class" role="main">
      <h1 class="govuk-heading-xl">School Search Results</h1>
    </main>
    <div>
      <ul v-for="school in schools" :key="school.id" class="govuk-list">
        <div class="govuk-!-font-size-24 govuk-!-font-weight-bold">
          <nuxt-link :to="{ path: 'validator/school-search', query: { id: school.id }}" class="govuk-link">
            {{ school.name }}
          </nuxt-link>
        </div>
        <div class="govuk-!-font-size-16">
          <div>
            <span class="govuk-!-font-weight-bold"> Street: </span> {{ school.street }}
          </div>
          <div>
            <span class="govuk-!-font-weight-bold"> Locality: </span> {{ school.locality }}
          </div>
          <div>
            <span class="govuk-!-font-weight-bold"> Town: </span> {{ school.town }}
          </div>
          <div>
            <span class="govuk-!-font-weight-bold"> Post Code: </span> {{ school.postCode }}
          </div>
          <div>
            <span class="govuk-!-font-weight-bold"> Phase: </span> {{ school.phaseName }}
          </div>
        </div>
        <hr class="govuk-section-break govuk-section-break--visible">
      </ul>
    </div>
  </section>
</template>
<script>
import axios from 'axios'
import _ from 'lodash'
import https from 'http'
export default {
  watchQuery: true,
  head: {
    title: 'Check Intro'
  },
  async asyncData({ route }) {
    let invalid = false
    let search = ''
    if (route.query.invalid) {
      invalid = true
    }
    if (route.query.school) {
      search = route.query.school
    }
    console.log(search)
    const api = process.env.BASE_URL || 'http://localhost:5000'
    const agent = new https.Agent({
      rejectUnauthorized: false
    })
    let schoolRes = await axios
      .get(`${api}/api/Schools/search?name=${search}`, { httpsAgent: agent })
      .then(res => {
        return res.data
      })
      .catch(err => {
        console.log(err)
      })
    return {
      error: invalid,
      schools: schoolRes
    }
  },
  data: function() {
    return {
      schools: [],
      error: false,
      selectedSchool: {
        name: null
      },
      isLoading: false,
      jsEnabled: false
    }
  },

  async created() {
    if (process.client) {
      if (!this.jsEnabled) {
        this.schools = []
        this.jsEnabled = true
      }
    }
  }
}
</script>
<style>
.dropdown li {
  border-bottom: 1px solid rgba(112, 128, 144, 0.1);
}

.dropdown li:last-child {
  border-bottom: none;
}
</style>
