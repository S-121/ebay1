// axios
import axios from 'axios'

const baseURL = 'http://23.98.176.222:8080/api/'

export default axios.create({
  baseURL,
  headers: {
    'Authorization': "Bearer " + localStorage.getItem('accessToken')
  }
  // You can add your headers here
})
