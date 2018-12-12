export default function({ store, route, redirect }) {
  if (route.path.includes('validator/subjects-taught')) {
    if (route.query.taught) {
      if (route.query.taught.includes('1')) {
        redirect('/question/still-teaching-uk')
      } else if (
        route.query.taught.includes('2') ||
        route.query.taught.includes('3')
      ) {
        redirect('/not-eligible/subjects-taught')
      }
    }
    redirect(
      `/question/subjects-taught?invalid=true&schoolId=${route.query.schoolId}`
    )
  }
}
