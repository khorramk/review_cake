//test.js

import Vue from 'vue';
import axios from 'axios';
import VueRouter from 'vue-router';
import CommentsComponent from './components/CommentsComponent';

const vm = new Vue(CommentsComponent);

test('test comment data after fetching', () => {
    vm.$nextTick().then(()=> {
        expect(typeof vm.comments).toBe('object');
    }).catch().finally();
});


test('disable the isdisable key for button-remove', () => {
    vm.$on('submit', () => {
        expect(vm.isDisable).toBe(true);
    });
});


it('renders the component', () => {
   
    vm.$nextTick().then(()=> {
 
     expect(vm).toMatchSnapshot();
    }).catch().finally()
  })