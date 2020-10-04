//test.js

import Vue from 'vue';
import axios from 'axios';
import VueRouter from 'vue-router';
import CommentsComponent from './components/CommentsComponent';

const vm = new Vue(CommentsComponent);


it('renders the component', () => {
   
    vm.$nextTick().then(()=> {
 
     expect(vm).toMatchSnapshot();
    }).catch().finally()
  })