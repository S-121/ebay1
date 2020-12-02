

import axios from '@/axios.js'

export default {
  // get products research.
  search({ commit }, payload) {
    return new Promise((resolve, reject) => {
      axios.post('/competitor_research', {
        ...payload
      })
        .then((response) => {
          // commit('SEARCHRESULTS', response.data.products)
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




}
