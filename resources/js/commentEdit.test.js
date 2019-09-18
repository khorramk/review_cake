//test.js

import Vue from 'vue';
import axios from 'axios';
import VueRouter from 'vue-router';
import commentEdit from './components/commentEdit';

const vm = new Vue(commentEdit);

test('test edit body', () => {
    expect(typeof vm.editBody).toBe('string');
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