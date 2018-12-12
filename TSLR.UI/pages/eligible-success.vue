<template>
  <div class="govuk-grid-row">
    <div class="govuk-grid-column-two-thirds">
      <div class="govuk-heading-xl">
        You're eligible to claim your student loan payments
      </div>
      <p class="govuk-body">
        Based on your answers, you are eligible to claim your student loan payments back.
      </p>
      <p class="govuk-body">
        You can apply from September 2019. Register your details and we'll send you updates about the service.
      </p>
      <nuxt-link to="/" role="button" draggable="false" class="govuk-button govuk-button--start">
        Register for updates
      </nuxt-link>
    </div>
  </div>
</template>

<script>
export default {
  head: {
    title: 'You are eligible'
  }
}
</script>
