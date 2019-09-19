import Vuex from 'vuex';
import Vue from 'vue';
import axios from 'axios';
import { mutations } from './mutations';
Vue.use(Vuex);
export const store = new Vuex.Store({ 
    state: {
        reviewsList: '',
        comment: '',
        isDisable: false,
        editsReviews: '',
        review: ''

    },
    mutations: mutations
});