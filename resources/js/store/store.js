import Vuex from 'vuex';
import Vue from 'vue';
import axios from 'axios';
import { mutations } from './mutations';
import VueRouter from 'vue-router';
Vue.use(Vuex);
Vue.use(VueRouter);
export const store = new Vuex.Store({ 
    state: {
        reviewsList: '',
        isDisable: false,
    },
    mutations: mutations
});