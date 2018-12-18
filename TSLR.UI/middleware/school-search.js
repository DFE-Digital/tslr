import axios from 'axios'
export default async function({ store, route, redirect }) {
  if (route.path.includes('validator/school-search')) {
    if (route.query.id) {
      let schoolRes = await axios
        .get(`/api/Schools/${route.query.id}/valid`)
        .then(res => {
          return res.data
        })
        .catch(err => {
          console.log('Error: ' + err)
          redirect('/question/school-search?invalid=true')
        })
      if (schoolRes) {
        redirect(`/question/student-loan?schoolId=${route.query.id}`)
      }
      redirect(`/not-eligible/school-search?schoolId=${route.query.id}`)
    } else if (
      route.query.query_school &&
      route.query.query_school.length > 0
    ) {
      redirect(
        `/question/school-search-list?school=${route.query.query_school}`
      )
    }
    redirect('/question/school-search?invalid=true')
  }
}
