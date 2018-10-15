const express = require('express')
const router = express.Router()

// Add your routes here - above the module.exports line
// Branching

// Option A routes
// ---------------
// Using regex matching, these should work even for snapshots

router.post(/eligibility-schools/, function (req, res) {

  // From eligibility-qts
  let eligible = req.session.data['qts']
  if (eligible === 'no') {
    res.redirect('ineligible')
  } else {
    res.redirect('eligibility-schools')
  }

})

router.post(/eligibility-authority/, function (req, res) {

  // From eligibility-schools
  let eligible = req.session.data['school']
  if (eligible === 'no') {
    res.redirect('ineligible')
  } else {
    res.redirect('eligibility-authority')
  }

})

router.post(/eligibility-proof/, function (req, res) {

  // From eligibility-authority
  let eligible = req.session.data['authority']
  if (eligible === 'no') {
    res.redirect('ineligible')
  } else {
    res.redirect('eligibility-proof')
  }

})

router.post(/eligibility-proof-loan/, function (req, res) {

  // From eligibility-proof
  let eligible = req.session.data['proof']
  if (eligible === 'no') {
    res.redirect('ineligible')
  } else {
    res.redirect('eligibility-proof-loan')
  }

})

router.post(/eligibility-teaching/, function (req, res) {

  // From eligibility-proof-loan
  let eligible = req.session.data['proof-loan']
  if (eligible === 'no') {
    res.redirect('ineligible')
  } else {
    res.redirect('eligibility-teaching')
  }

})

router.post(/about-you-trn/, function (req, res) {

  // From eligibility-teaching
  let eligible = req.session.data['teaching']
  if (eligible === 'no') {
    res.redirect('ineligible')
  } else {
    res.redirect('about-you-trn')
  }

})

module.exports = router
