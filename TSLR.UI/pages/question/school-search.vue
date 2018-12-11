<template>
  <section class="container">
    <div>
      <form 
        id="school-teach-form"
        :class="{'govuk-form-group--error': error}"
        class="govuk-form-group"
        action="/validator/school-search">
        <fieldset 
          class="govuk-fieldset govuk-form-group">
          <legend class="govuk-fieldset__legend govuk-fieldset__legend--xl">
            <h1 class="govuk-fieldset__heading">
              Where have you taught since 6 April 2018?
            </h1>
          </legend>
          <v-select v-model="selectedSchool" :options="schools" label="name" @search="onSearch">
            <template slot="option" slot-scope="option">
              <div class="content">
                <div class="govuk-!-font-size-16 govuk-!-font-weight-bold">
                  {{ option.name }}
                </div>
                <div class="govuk-!-font-size-14">
                  {{ getLabel(option) }}
                </div>
              </div>
            </template>
          </v-select>
          <input v-if="jsEnabled" v-model="selectedSchool.name" type="hidden" name="query_school">
          <noscript>
            <input class="govuk-input" name="query_school" type="text" list="schools">
          </noscript>
          <span v-if="error" id="where-did-you-teach-error" class="govuk-error-message">
            You must select a school
          </span>
        </fieldset>
      </form> 
    </div>
    <noscript>
      <button 
      type="submit" 
      form="school-teach-form"
      class="govuk-button">
      Continue
      </button>
    </noscript>
    <button 
      v-if="jsEnabled" 
      type="button"
      form="school-teach-form" 
      class="govuk-button"
      @click="submit()">
      Continue
    </button>
  </section>
</template>
<script>
import axios from 'axios'
import _ from 'lodash'

export default {
  watchQuery: true,
  head: {
    title: 'Check Intro'
  },
  async asyncData({ route }) {
    let invalid = false
    if (route.query.invalid) {
      invalid = true
    }
    let schoolRes = await axios
      .get(`api/Schools`)
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
      schools: [
        {
          name: ''
        }
      ],
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
  },
  methods: {
    onSearch(search, loading) {
      loading(true)
      this.search(loading, search, this)
    },
    search: _.debounce((loading, search, vm) => {
      fetch(`/api/Schools/search?name=${escape(search)}`).then(res => {
        res.json().then(json => (vm.schools = json))
        loading(false)
      })
    }, 350),
    getLabel(school) {
      if (school) {
        let label = ''
        if (school.street.length > 0) {
          label = `${label}${school.street}`
        }
        if (school.town.length > 0) {
          label = `${label}, ${school.town}`
        }
        if (school.postCode.length > 0) {
          label = `${label}, ${school.postCode}`
        }
        return label
      }
      return ''
    },
    submit() {
      console.log(this.selectedSchool.name)
      this.$router.push({
        path: '/validator/school-search',
        query: { id: this.selectedSchool.id }
      })
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
