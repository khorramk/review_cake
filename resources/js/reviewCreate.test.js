

import Vue from 'vue';
import axios from 'axios';
import VueRouter from 'vue-router';
import reviewCreate from './components/reviewCreate';

const vm = new Vue(reviewCreate);


it('renders correct elements', () => {
    
    vm.$nextTick().then(()=> {
 
     expect(vm).toMatchSnapshot();
    })
  })