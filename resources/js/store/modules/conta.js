import axios from 'axios'
import Cookies from 'js-cookie'
import * as types from '../mutation-types'

// state
export const state = {

}

// getters
export const getters = {

}

// mutations
export const mutations = {

}

// actions
export const actions = {
    async criarConta({ commit },payload){
        try{
            const { data } = await axios.post('http://127.0.0.1:8000/api/conta', { ...payload })
            console.log(data)
        }catch(e){

        }
    }
}
