export default function({ store, route, redirect }) {
  if (route.path.includes('validator/still-teaching-uk')) {
    if (route.query.status) {
      if (route.query.status.includes('true')) {
        redirect('/eligible-success')
      } else if (route.query.status.includes('false')) {
        redirect('/not-eligible/still-teaching-uk')
      }
    }
    redirect('/question/still-teaching-uk?invalid=true')
  }
}
