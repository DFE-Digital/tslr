<template>
  <div class="govuk-grid-row">
    <div class="govuk-grid-column-two-thirds">
      <div class="govuk-heading-xl">
        Teachers: check if you can claim back student loan payments
      </div>
      <p class="govuk-body">
        You'll be asked questions to check whether you're eligible to claim your student loan payments back.
      </p>
      <p class="govuk-body">
        Applications to claim are open from September 2019.
      </p>
      <p class="govuk-body">
        If you've worked at more than one school since 6 April 2018, check your eligiblity separately for each school.
      </p>
      <nuxt-link to="/question/qualified" role="button" draggable="false" class="govuk-button" tabindex="4">
        Continue to questions
      </nuxt-link>
    </div>
  </div>
</template>

<script>
export default {
  head: {
    title: 'Eligibility checker'
  }
}
</script>
