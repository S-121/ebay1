import axios from '../../../axios/index.js'
import store from '../../../../store/store.js'

export default {
  init() {
    axios.interceptors.response.use(function (response) {
      return response
    }, function (error) {
      return Promise.reject(error)
    })
  },
  login(email, pwd) {
    return axios.post('/signin', {
      email,
      password: pwd
    })
  },
  registerUser(name, email, pwd) {
    return axios.post('/signup', {
      name: name,
      email,
      password: pwd
    })
  },
  refreshToken() {
    return axios.post('/refresh_token', { accessToken: localStorage.getItem('accessToKen') })
  }
}
