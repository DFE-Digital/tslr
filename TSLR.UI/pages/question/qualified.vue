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
                  <a href="#when-did-you-qualify-error">You must select when you qualified</a>
                </li>
              </ul>
            </div>
          </div>
          <div>
            <form 
              id="qualified-form"
              :class="{'govuk-form-group--error': invalid}"
              class="govuk-form-group"
              action="/validator/qualified">
              <fieldset 
                class="govuk-fieldset govuk-form-group">
                <legend class="govuk-fieldset__legend govuk-fieldset__legend--xl">
                  <h1 class="govuk-fieldset__heading">
                    Check when you qualified
                  </h1>
                </legend>
                <span v-if="invalid" id="when-did-you-qualify-error" class="govuk-error-message">
                  You must select when you qualified
                </span>
                <div class="govuk-radios">
                  <div class="govuk-radios__item">
                    <input 
                      id="when-did-you-qualify1" 
                      v-model="checkedNames" 
                      :class="{ 'govuk-input--error': invalid }"
                      class="govuk-radios__input" 
                      name="qualified" 
                      type="radio" 
                      value="After">
                    <label 
                      class="govuk-label govuk-radios__label" 
                      for="where-do-you-live-1">
                      On or after 1 September 2012
                    </label>
                  </div>
                  <div class="govuk-radios__item">
                    <input 
                      id="when-did-you-qualify2" 
                      v-model="checkedNames" 
                      :class="{ 'govuk-input--error': invalid }"
                      class="govuk-radios__input" 
                      name="qualified" 
                      type="radio" 
                      value="Before">
                    <label 
                      class="govuk-label govuk-radios__label" 
                      for="where-do-you-live-2">
                      Before 1 September 2012
                    </label>
                  </div>
                </div>
              </fieldset>
              <button 
                type="submit" 
                form="qualified-form"
                class="govuk-button">
                Continue
              </button>
            </form> 
          </div>
        </div>
  </div></div></section>
</template>
<script>
export default {
  watchQuery: true,
  head: {
    title: 'The date you qualified as a teacher'
  },
  asyncData({ route }) {
    if (route.query.invalid) {
      return { invalid: true }
    }
    return ''
  },
  data: function() {
    return {
      checkedNames: [],
      invalid: false
    }
  }
}
</script>
