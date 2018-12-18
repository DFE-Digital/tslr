<template>
  <section class="container">
    <div class="govuk-width-container">
      <div class="govuk-grid-row">
        <div class="govuk-grid-column-two-thirds">
          <div class="govuk-heading-xl">
            You're not eligible to claim student loan payments
          </div>
          <p class="govuk-body">
            You can only claim if student loan payments were taken from your teaching wages while you were at {{ schoolName }}
          </p>
          <a href="https://www.gov.uk/" class="govuk-link">Go to gov.uk homepage</a>
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
    title: 'You are not eligible'
  },
  async asyncData({ route }) {
    let schoolName = ''
    let error = false

    if (route.query.schoolId) {
      await axios
        .get(`/api/Schools/${route.query.schoolId}`)
        .then(res => {
          schoolName = res.data.name
        })
        .catch(err => {
          console.log(err)
        })
    }

    if (route.query.invalid) {
      error = true
    }

    return { invalid: error, schoolName: schoolName }
  },
  data: function() {
    return {
      schoolName: ''
    }
  }
}
</script>
