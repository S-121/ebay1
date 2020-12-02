
export default {
  UPDATE_ANALITIC_PRODUCTS(state, payload) {
    state.analytic_items = payload
  },
  UPDATE_ALIANALITIC_PRODUCTS(state, payload) {
    state.alianalytic_items = payload
  },
  CATEGORYSEARCHRESULTS(state, products) {
    // console.log('store products', products);
    state.category_item = products
  },
  UPDATE_SEARCH_KEYWORD(state, keyword) {
    state.search_keyword = keyword;
  }
}
