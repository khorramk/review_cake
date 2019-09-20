//test.js
import Vue from 'vue';
import reviewsComponent from './components/reviewsComponent';
import axios from 'axios';
import VueRouter from 'vue-router';

 it('renders component and match snapshots', () => {
   const vm = new Vue(reviewsComponent);
   vm.$nextTick().then(()=> {

    expect(vm).toMatchSnapshot();
   }).catch().finally();
 });