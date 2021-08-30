import { withApiAuthRequired, getSession } from '@auth0/nextjs-auth0'
import axios from 'axios'

export default withApiAuthRequired(async function recommend(req, res) {
  const { user } = getSession(req, res)
  axios.defaults.baseURL = process.env.REACT_APP_API_URL
  const response = await axios.get('/recommend', {
    //change this to /recommend
    headers: {
      Authorization: user.sub,
    },
  })
  res.json(JSON.stringify(response.data))
})
