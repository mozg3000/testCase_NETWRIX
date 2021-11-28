import Vue from 'vue'
import Vuex from 'vuex'
import axios from "axios";

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    isLoading: false,
    search: '',
    searchType: 'company',
    partners: []
  },
  mutations: {
    SET_LOADER_STATUS:  (state, status) => {
      state.isLoading = status;
    },
    SET_PARTNERS: (state, partners) => {
      state.partners = partners;
    },
    SET_SEARCH: (state, search) => {
        state.search = search;
    },
    SET_SEARCH_TYPE: (state, type) => {
        state.searchType = type;
    }
  },
  actions: {
    fetchPartners: ({commit}, query) => {
        commit('SET_LOADER_STATUS', true);
        return new Promise(
            async (resolve, reject) => {
                let response = await axios({
                    method: 'get',
                    url: '/partner?' + query
                })
                if(response && response.status === 200){
                    let partners_list = response.data;
                    commit('SET_PARTNERS', partners_list);
                    commit('SET_LOADER_STATUS', false);
                    resolve(partners_list);
                }
                commit('SET_LOADER_STATUS', false);
                reject(response);
            }
        )
    },
  },
   getters: {
      buildQuery: (state) => {
          return `${state.searchType}=${state.search}`;
      }
   } ,
  modules: {
  }
})
