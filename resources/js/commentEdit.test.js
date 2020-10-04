//test.js

import Vue from 'vue';
import axios from 'axios';
import VueRouter from 'vue-router';
import commentEdit from './components/commentEdit';

const vm = new Vue(commentEdit);



it('renders the component', () => {
   
    vm.$nextTick().then(()=> {
 
     expect(vm).toMatchSnapshot();
    }).catch().finally()
  })