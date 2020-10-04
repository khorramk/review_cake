

import Vue from 'vue';
import axios from 'axios';
import VueRouter from 'vue-router';
import reviewEdit from './components/reviewEdit';

const vm = new Vue(reviewEdit);

it('renders correct elements', () => {
    
    vm.$nextTick().then(()=> {
 
     expect(vm).toMatchSnapshot();
    }).catch().finally();
  })