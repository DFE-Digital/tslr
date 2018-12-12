export default function ({ store, route, redirect }) {
  if (route.path.includes('validator/student-loan')) {
    if (route.query.paid) {
      if (route.query.paid.includes('true')) {
        redirect(`/question/subjects-taught?school=${route.query.school}`)
      } else if (route.query.paid.includes('false')) {
        redirect('/not-eligible/student-loan')
      }
    }
    redirect(`/question/student-loan?invalid=true&school=${route.query.school}`)
  }
}

