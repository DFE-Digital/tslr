const pkg = require('./package')

module.exports = {
  mode: 'universal',

  /*
  ** Headers of the page
  */
  head: {
    title: pkg.name,
    meta: [
      { charset: 'utf-8' },
      { name: 'viewport', content: 'width=device-width, initial-scale=1' },
      { hid: 'description', name: 'description', content: pkg.description }
    ],
    link: [{ rel: 'icon', type: 'image/x-icon', href: '/favicon.ico' }]
  },

  /*
  ** Customize the progress-bar color
  */
  loading: { color: '#fff' },

  /*
  ** Global CSS
  */
  css: ['assets/css/styles.scss'],

  /*
  ** Plugins to load before mounting the App
  */
  plugins: [
    {
      src: '~/plugins/vue-select',
      ssr: false
    },
    {
      src: '~/plugins/axios'
    }
  ],

  /*
  ** Nuxt.js modules
  */
  modules: [
    // Doc: https://github.com/nuxt-community/axios-module#usage
    '@nuxtjs/axios',
    ['@nuxtjs/proxy', { pathRewrite: { '^/api': 'http://localhost:5000/api' } }]
  ],
  router: {
    middleware: [
      'qualified',
      'school-search',
      'student-loan',
      'subjects-taught',
      'still-teaching-uk'
    ]
  },

  /*
  ** Axios module configuration
  */
  axios: {
    proxy: true,
    proxyHeaders: false,
    credentials: false
  },

  proxy: {
    '/api': {
      target: process.env.BASE_URL || 'http://localhost:5000',
      secure: false,
      changeOrigin: true
    }
  },
  /*
  ** Server configuration
  */
  server: {
    port: 8080, // default: 3000
    host: '0.0.0.0' // default: localhost
  },

  /*
  ** Build configuration
  */
  build: {
    extractCSS: true,
    quiet: false,
    /*
    ** You can extend webpack config here
    */
    extend(config, ctx) {
      config.module.rules.splice(
        config.module.rules.indexOf(
          c => c.test === /\.(png|jpe?g|gif|svg|webp)$/
        ),
        1
      )

      // Run ESLint on save
      if (ctx.isDev && ctx.isClient) {
        config.module.rules.push({
          enforce: 'pre',
          test: /\.(js|vue)$/,
          loader: 'eslint-loader',
          exclude: /(node_modules)/
        })
      }
    }
  }
}
