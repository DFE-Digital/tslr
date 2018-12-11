import axios from 'axios'
export default async function({ store, route, redirect }) {
  if (route.path.includes('validator/school-search')) {
    if (route.query.id) {
      const api = process.env.BASE_URL || 'http://localhost:5000'
      let schoolRes = await axios
        .get(`${api}/api/Schools/${route.query.id}/valid`)
        .then(res => {
          return res.data
        })
        .catch(err => {
          redirect('/question/school-search?invalid=true')
        })
      if (schoolRes) {
        redirect(`/question/student-loan?schoolId=${route.query.id}`)
      }
      redirect(`/not-eligible/school-search?schoolId=${route.query.id}`)
    } else if (route.query.query_school) {
      redirect(
        `/question/school-search-list?schoolId=${route.query.query_school}`
      )
    }
    redirect('/question/school-search?invalid=true')
  }
}
