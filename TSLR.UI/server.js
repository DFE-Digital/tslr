const { Nuxt, Builder } = require('nuxt')
const fs = require('fs')
const express = require('express')
const app = express()
const isProd = process.env.NODE_ENV === 'production'
const http = require('http')
const https = require('https')
// We instantiate Nuxt.js with the options
const config = require('./nuxt.config.js')
config.dev = !isProd
const nuxt = new Nuxt(config)

// Render every route with Nuxt.js
app.use(nuxt.render)

// Build only in dev mode with hot-reloading
if (config.dev) {
  new Builder(nuxt)
    .build()
    .then(listen)
    .catch(error => {
      console.error(error)
      process.exit(1)
    })
} else {
  listen()
}

var options = {
  key: fs.readFileSync('./ssl/key.pem'),
  cert: fs.readFileSync('./ssl/certificate.pem')
}

// Listen the server
function listen() {
  // Listen the server
  http
    .createServer(function(req, res) {
      res.writeHead(301, {
        Location: 'https://' + req.headers['host'] + req.url
      })
      res.end()
    })
    .listen(80)
  https.createServer(options, app).listen(443)
  console.log('Server listening on `localhost:')
}
