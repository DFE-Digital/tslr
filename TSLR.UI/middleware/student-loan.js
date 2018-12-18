import axios from 'axios'
export default async function({ store, route, redirect }) {
  if (route.path.includes('validator/student-loan')) {
    if (route.query.paid) {
      if (route.query.paid.includes('true')) {
        console.log('Searching')
        let schoolRes = await axios
          .get(`/api/Schools/${route.query.schoolId}/sen`)
          .then(res => {
            console.log('returned :' + res.data)
            return res.data
          })
          .catch(err => {
            console.log('Error: ' + err)
            redirect(
              `/question/student-loan?invalid=true&schoolId=${
                route.query.schoolId
              }`
            )
          })
        if (schoolRes) {
          redirect('/question/still-teaching-uk')
        } else {
          redirect(`/question/subjects-taught?schoolId=${route.query.schoolId}`)
        }
        redirect(`/not-eligible/school-search?schoolId=${route.query.schoolId}`)
      } else if (route.query.paid.includes('false')) {
        redirect('/not-eligible/student-loan')
      }
    }
    redirect(
      `/question/student-loan?invalid=true&schoolId=${route.query.schoolId}`
    )
  }
}