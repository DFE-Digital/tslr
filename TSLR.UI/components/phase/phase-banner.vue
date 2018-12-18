<template>
  <div id="phase-banner" class="govuk-phase-banner">
    <p class="govuk-phase-banner__content">
      <strong class="ncs-phase-tag govuk-tag govuk-phase-banner__content__tag ">
        {{ phase }}
      </strong>
      <span class="ncs-phase-banner__text govuk-phase-banner__text">
        This is a new service – your
        <a class="govuk-link" href="mailto:financial.incentives@education.gov.uk">feedback</a> will help us to improve it.
      </span>
    </p>
  </div>
</template>

<script>
export default {
  data() {
    return {
      phase: 'alpha'
    }
  }
}
</script>

<style lang="scss">
#phase-banner {
  margin-bottom: 30px;
}
</style>
