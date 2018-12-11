<template>
  <div>
    <tslr-header />
    <div class="govuk-width-container">
      <phase-banner />
      <nuxt/>
    </div>
    <tslr-footer />
  </div>
</template>

<script>
import Header from '~/components/header/header.vue'
import Footer from '~/components/footer/footer.vue'
import PhaseBanner from '~/components/phase/phase-banner.vue'

export default {
  components: {
    'tslr-header': Header,
    'tslr-footer': Footer,
    'phase-banner': PhaseBanner
  }
}
</script>
