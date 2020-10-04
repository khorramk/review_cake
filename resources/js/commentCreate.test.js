//test.js

import Vue from 'vue';
import axios from 'axios';
import VueRouter from 'vue-router';
import commentCreate from './components/commentCreate';

const vm = new Vue(commentCreate);

it('renders the elements', () => {
   
    vm.$nextTick().then(()=> {
 
     expect(vm).toMatchSnapshot();
    }).catch().finally()
  })