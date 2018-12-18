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
              id="still-teaching-uk"
              action="/validator/still-teaching-uk">
              <div
                :class="{'govuk-form-group--error': invalid}"
                class="govuk-form-group">
                <fieldset 
                  class="govuk-fieldset govuk-form-group">
                  <legend class="govuk-fieldset__legend govuk-fieldset__legend--xl">
                    <h1 class="govuk-fieldset__heading">
                      Are you still working at a school in the UK?
                    </h1>
                  </legend>
                  <span v-if="invalid" id="still-teaching-uk-error" class="govuk-error-message">
                    Select one of the options
                  </span>
                  <div class="govuk-radios">
                    <div class="govuk-radios__item">
                      <input 
                        id="still-teaching-uk1" 
                        v-model="checkedNames" 
                        :class="{ 'govuk-input--error': invalid }"
                        class="govuk-radios__input" 
                        name="status" 
                        type="radio" 
                        value="true"
                        tabindex="4">
                      <label 
                        class="govuk-label govuk-radios__label" 
                        for="still-teaching-uk1">
                        Yes
                      </label>
                    </div>
                    <div class="govuk-radios__item">
                      <input 
                        id="still-teaching-uk2" 
                        v-model="checkedNames" 
                        :class="{ 'govuk-input--error': invalid }"
                        class="govuk-radios__input" 
                        name="status" 
                        type="radio" 
                        value="false"
                        tabindex="5">
                      <label 
                        class="govuk-label govuk-radios__label" 
                        for="still-teaching-uk2">
                        No
                      </label>
                    </div>
                  </div>
                </fieldset>
              </div>
              <button 
                type="submit" 
                class="govuk-button"
                tabindex="6">
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
    title: "Check you're still teaching"
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
