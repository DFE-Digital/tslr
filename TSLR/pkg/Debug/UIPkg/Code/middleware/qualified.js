export default function({ store, route, redirect }) {
  if (route.path.includes('/validator/qualified')) {
    if (route.query.qualified) {
      if (route.query.qualified.includes('After')) {
        redirect('/question/school-search')
      } else if (route.query.qualified.includes('Before')) {
        redirect('/not-eligible/qualified')
      }
    }
    redirect('/question/qualified?invalid=true')
  }
}
