<template>
  <section class="container">
    <div class="govuk-width-container">
      <div class="govuk-grid-row">
        <div class="govuk-grid-column-two-thirds">
          <div 
            v-if="invalid" 
            class="govuk-error-summary" 
            aria-labelledby="error-summary-title" 
            role="alert" 
            tabindex="-1" 
            data-module="error-summary">
            <h2 id="error-summary-title" class="govuk-error-summary__title">
              There is a problem
            </h2>
            <div class="govuk-error-summary__body">
              <ul class="govuk-list govuk-error-summary__list">
                <li>
                  <a href="#when-did-you-qualify-error">Select one of the options</a>
                </li>
              </ul>
            </div>
          </div>
          <div>
            <form 
              id="student-loan-form"
              action="/validator/student-loan">
              <div
                :class="{'govuk-form-group--error': invalid}"
                class="govuk-form-group">
                <fieldset class="govuk-fieldset govuk-form-group">
                  <input id="school" :value="schoolName" hidden="true" name="schoolName">
                  <input id="schoolId" :value="schoolId" hidden="true" name="schoolId">
                  <legend class="govuk-fieldset__legend govuk-fieldset__legend--xl">
                    <h1 class="heading govuk-fieldset__heading">
                      Did you pay back your student loan while you were at AldridgeUTC@Mediacity?
                    </h1>
                  </legend>
                  <span v-if="invalid" id="paid-error" class="govuk-error-message">
                    Select one of the options
                  </span>
                  <div class="govuk-radios">
                    <div class="govuk-radios__item">
                      <input 
                        id="paid1"
                        v-model="checkedNames"
                        :class="{ 'govuk-input--error': invalid }"
                        class="govuk-radios__input"
                        name="paid"
                        type="radio"
                        value="true">
                      <label 
                        class="govuk-label govuk-radios__label"
                        for="paid1">
                        Yes
                      </label>
                    </div>
                    <div class="govuk-radios__item">
                      <input 
                        id="paid2"
                        v-model="checkedNames"
                        :class="{ 'govuk-input--error': invalid }"
                        class="govuk-radios__input"
                        name="paid"
                        type="radio"
                        value="false">
                      <label 
                        class="govuk-label govuk-radios__label"
                        for="paid2">
                        No
                      </label>
                    </div>
                  </div>
                  <input type="hidden" name="error" value="student-loan">
                </fieldset>
              </div>
              <button 
                type="submit" 
                class="govuk-button">
                Continue
              </button>
            </form> 
          </div>
        </div>
      </div>
  </div></section>
</template>
<script>
import axios from 'axios'

export default {
  watchQuery: true,
  head: {
    title: 'Student loan check'
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
    return {
      invalid: error,
      schoolName: schoolName,
      schoolId: route.query.schoolId
    }
  },
  data: function() {
    return {
      checkedNames: [],
      invalid: false,
      schoolName: '',
      schoolId: ''
    }
  }
}
</script>

<style lang="scss">
.heading {
  overflow-wrap: break-word;
  word-wrap: break-word;
  hyphens: auto;
}
</style>
