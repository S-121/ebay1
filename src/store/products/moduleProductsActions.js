

import axios from '@/axios.js'

export default {
  // get products research.
  search({ commit }, payload) {
    return new Promise((resolve, reject) => {
      axios.post('/search', {
        ...payload
      })
        .then((response) => {
          commit('SEARCHRESULTS', response.data.products)
          resolve(response)
        })
        .catch((error) => { reject(error) })
    })
  },
  refresh_token({ commit }) {
    return new Promise((resolve, reject) => {
      axios.post('/refresh_token', {
        'accessToken': localStorage.getItem('accessToken')
      })
        .then((response) => {
          // commit('UPDATE_LABELS', payload)
          resolve(response)
        })
        .catch((error) => { reject(error) })
    })
  },
  searchBestSellsProduct({ commit }) {
    return new Promise((resolve, reject) => {
      axios.post('/searchBestSellsProduct')
        .then((response) => {
          resolve(response)
        })
        .catch((error) => { reject(error) })
    })
  },
  getBestSellsProduct({ commit }) {
    return new Promise((resolve, reject) => {
      axios.get('/getBestSellsProduct')
        .then((response) => {
          resolve(response)
        })
        .catch((error) => { reject(error) })
    })
  },
  getAliexpressProduct({ commit }) {
    return new Promise((resolve, reject) => {
      axios.get('/getAliexpressProduct')
        .then((response) => {
          resolve(response)
        })
        .catch((error) => { reject(error) })
    })
  },
  register({ commit }, data) {
    return new Promise((resolve, reject) => {
      axios.post('/register', {
        ...data
      })
        .then((response) => {
          commit('SEARCHRESULTS', response.data.products)
          resolve(response)
        })
        .catch((error) => { reject(error) })
    })
  },
  getuseradmindata({ commit }) {
    return new Promise((resolve, reject) => {
      axios.get('/getuseradmindata')
        .then((response) => {
          resolve(response)
        })
        .catch((error) => { reject(error) })
    })
  },
  user_del({ commit }, data) {
    return new Promise((resolve, reject) => {
      axios.post('/user_del', data)
        .then((response) => {
          commit('SEARCHRESULTS', response.data.products)
          resolve(response)
        })
        .catch((error) => { reject(error) })
    })
  },
  pay1({ commit }, data) {
    return new Promise((resolve, reject) => {
      axios.post('/pay_integrate', { pay_value: data })
        .then((response) => {
          commit('SEARCHRESULTS', response.data.products)
          resolve(response)
        })
        .catch((error) => { reject(error) })
    })
  },
  payment({ commit }, data) {
    return new Promise((resolve, reject) => {
      axios.post('/payment', {
        ...data
      })
        .then((response) => {
          commit('SEARCHRESULTS', response.data.products)
          resolve(response)
        })
        .catch((error) => { reject(error) })
    })
  },
}
