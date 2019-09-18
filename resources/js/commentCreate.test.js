//test.js

import Vue from 'vue';
import axios from 'axios';
import VueRouter from 'vue-router';
import commentCreate from './components/commentCreate';

const vm = new Vue(commentCreate);

test('test create body', () => {
    expect(typeof vm.commentBody).toBe('string');
});

test('disable the isdisable key for button-remove', () => {
    vm.$on('submit', () => {
        expect(vm.isDisable).toBe(true);
    });
});
it('renders the elements', () => {
   
    vm.$nextTick().then(()=> {
 
     expect(vm).toMatchSnapshot();
    }).catch().finally()
  })