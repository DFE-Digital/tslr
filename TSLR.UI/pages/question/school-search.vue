<template>
  <section class="container">
    <div class="govuk-width-container">
      <div class="govuk-grid-row">
        <div class="govuk-grid-column-two-thirds">
          <div 
            v-if="error" 
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
                  <a href="#when-did-you-qualify-error">You must select a school</a>
                </li>
              </ul>
            </div>
          </div>
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
              <span v-if="error" id="where-did-you-teach-error" class="govuk-error-message">
                You must select a school
              </span>
              <div v-if="jsEnabled()" id="search-container">
                <div class="search-bar govuk-form-group">
                  <input id="name" v-model="searchTerm" class="govuk-input" type="text" autocomplete="off" @input="onSearch">
                </div>
                <div v-if="searchTermActive()" class="search-results" >
                  <div v-for="school in schools" :key="school.id" class="search-result" @click="onSelectedSchool(school)">
                    <div class="school-name" >
                      <span>{{ school.name }}</span>
                    </div>
                    <div class="school-caption">
                      <span>{{ getLabel(school) }}</span>
                    </div>
                  </div>
                </div>
                <input v-model="selectedSchool.name" type="hidden" name="query_school">
              </div>
              <noscript>
                <input class="govuk-input" name="query_school" type="text" list="schools">
              </noscript>
            </fieldset>
          </form> 
        </div>
      </div>
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
      v-if="jsEnabled()"
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
    title: 'The school you taught at'
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
      searchTerm: '',
      searchTermCompleted: false,
      schools: [
        {
          name: ''
        }
      ],
      error: false,
      selectedSchool: {
        name: null
      },
      isLoading: false
    }
  },

  computed: {
    searchResults() {
      if (!this.searchTerm || this.searchTerm.trim().length === 0) return
      return this.getSearchResults(this.searchTerm.trim(), this)
    }
  },

  methods: {
    jsEnabled() {
      return process.client
    },

    onSearch() {
      if (!this.searchTerm || this.searchTerm.trim().length === 0) return
      return this.getSearchResults(this.searchTerm.trim(), this)
    },

    getSearchResults: _.debounce((searchTerm, vm) => {
      vm.searchTermCompleted = false
      fetch(`/api/Schools/search?name=${escape(searchTerm)}`)
        .then(res => res.json())
        .then(json => (vm.schools = json))
    }, 350),

    onSelectedSchool(school) {
      this.searchTermCompleted = true
      this.searchTerm = school.name
      this.selectedSchool = school
    },

    searchTermActive() {
      console.log(this.searchTermCompleted)
      return (
        !this.searchTermCompleted &&
        (this.searchTerm !== undefined && this.searchTerm.trim().length > 0)
      )
    },

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
      this.$router.push({
        path: '/validator/school-search',
        query: { id: this.selectedSchool.id }
      })
    }
  }
}
</script>

<style lang="scss">
#search-container {
  .search-bar {
    margin-bottom: 0;
  }

  .search-results {
    -webkit-box-shadow: rgba(11, 12, 12, 0.256863) 0 2px 6px;
    box-shadow: rgba(11, 12, 12, 0.256863) 0 2px 6px;
    width: 100%;
    max-height: 342px;
    margin: 0;
    padding: 0;
    overflow-x: hidden;
    border-top: 0;
    color: #0b0c0c;
    background-color: #fff;

    .search-result {
      font-family: 'nta', Arial, sans-serif;
      font-size: 1.1875rem;
      line-height: 1.31579;
      display: block;
      position: relative;
      border-bottom: solid #bfc1c3;
      border-width: 1px 0;
      cursor: pointer;
      padding: 10px;

      &:nth-child(even) {
        background-color: #fafafa;
      }

      &:hover {
        border-color: #005ea5;
        background-color: #005ea5;
        outline: none;
        color: #fff;
      }

      &:hover .school-caption {
        color: #fff;
      }

      .school-caption {
        font-size: 1rem;
        line-height: 1.25;
        display: block;
        font-family: 'nta', Arial, sans-serif;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        font-weight: 400;
        font-size: 14px;
        font-size: 0.875rem;
        line-height: 1.14286;
        color: #6f777b;

        &:hover {
          color: inherit;
        }
      }
    }
  }
}
</style>
