//test.js

import Vue from 'vue';
import axios from 'axios';
import VueRouter from 'vue-router';
import Reviews from './components/Reviews';

const vm = new Vue(Reviews);

it('renders the elements', () => {
    const vm = new Vue(Reviews);
    vm.$nextTick().then(()=> {
 
     expect(vm).toMatchSnapshot();
    }).catch().finally();
  })
