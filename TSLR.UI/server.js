const { Nuxt, Builder } = require('nuxt')

const isProd = process.env.NODE_ENV === 'production'

// We instantiate Nuxt.js with the options
const config = require('./nuxt.config.js')
config.dev = !isProd
const nuxt = new Nuxt(config)

new Builder(nuxt).build()

require('greenlock-express')
  .create({
    // Let's Encrypt v2 is ACME draft 11
    version: 'draft-11',

    // Note: If at first you don't succeed, switch to staging to debug
    // https://acme-staging-v02.api.letsencrypt.org/directory
    server: 'https://acme-staging-v02.api.letsencrypt.org/directory',

    // Where the certs will be saved, MUST have write access
    configDir: './.config/acme/',

    // You MUST change this to a valid email address
    email: 'james.dalton@infinityworks.com',

    // You MUST change these to valid domains
    // NOTE: all domains will validated and listed on the certificate
    approvedDomains: ['tslr-eligiblity-ci.westeurope.cloudapp.azure.com'],

    // You MUST NOT build clients that accept the ToS without asking the user
    agreeTos: true,

    app: require('express')().use(nuxt.render),

    // Join the community to get notified of important updates
    communityMember: true,

    // Contribute telemetry data to the project
    telemetry: true

    //, debug: true
  })
  .listen(80, 443)
