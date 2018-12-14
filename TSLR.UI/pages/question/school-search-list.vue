<template>
  <section class="container">
    <div class="govuk-width-container">
      <div class="govuk-grid-row">
        <div class="govuk-grid-column-two-thirds">
          <nuxt-link :to="{ path: 'school-search'}" class="govuk-back-link">
            Back
          </nuxt-link>
          <main id="main-content" class="govuk-main-wrapper app-main-class" role="main">
            <h1 class="govuk-heading-xl">Matching Schools</h1>
            <p class="govuk-body">We found results for {{ search }}</p>
            <hr class="govuk-section-break govuk-section-break--visible">
          </main>
          <div>
            <div v-for="school in schools" :key="school.id" class="govuk-list">
              <div class="school-link govuk-!-font-size-24 govuk-!-font-weight-bold">
                <nuxt-link :to="{ path: 'validator/school-search', query: { id: school.id }}" class="govuk-link">
                  {{ school.name }}
                </nuxt-link>
              </div>
              <p class="school-info govuk-body">{{ school.street }}, {{ school.locality }}, {{ school.town }}, {{ school.postCode }}</p>
              <p class="school-phase govuk-body">Phase: {{ school.phaseName }}</p>
              <hr class="school-break govuk-section-break govuk-section-break--visible">
            </div>
          </div>
          <p class="govuk-body">
            If your school isn't shown, 
          <nuxt-link to="question/school-search" class="govuk-link">return to the previous page</nuxt-link>and enter a different search term</p>
        </div>
      </div>
    </div>
  </section>
</template>
<script>
import axios from 'axios'
export default {
  watchQuery: true,
  head: {
    title: 'School search'
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
    let schoolRes = await axios
      .get(`/api/Schools/search?name=${search}`)
      .then(res => {
        return res.data
      })
      .catch(err => {
        console.log('error: ' + err)
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
.school-link {
  margin-bottom: 25px;
}

.school-info {
  margin-bottom: 0;
}

.school-phase {
  color: #6f777b;
}

.school-break {
  margin-bottom: 20px;
}

.dropdown li {
  border-bottom: 1px solid rgba(112, 128, 144, 0.1);
}

.dropdown li:last-child {
  border-bottom: none;
}
</style>
