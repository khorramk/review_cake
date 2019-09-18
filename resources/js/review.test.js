//test.js

import Vue from 'vue';
import axios from 'axios';
import VueRouter from 'vue-router';
import Reviews from './components/Reviews';

const vm = new Vue(Reviews)
test('test comment data after fetching', () => {
    vm.$nextTick().then(()=> {
        expect(vm.comments).not.toHaveLength(0);
    }).catch().finally()
    
});


test('test error after request  ', () => {
    vm.$nextTick().then().catch(()=> {
        expect(vm.error).tobe(true)
    });
    
});

test('disable the isdisable key for button-remove', () => {
    vm.$on('submit', () => {
        expect(vm.isDisable).toBe(true);
    });
});

test('loading property to be true upon fetching ', () => {
    vm.$nextTick().then().catch().finally(()=> {
        expect(vm.loading).toBe(false);
    });
});

it('renders the elements', () => {
    const vm = new Vue(Reviews);
    vm.$nextTick().then(()=> {
 
     expect(vm).toMatchSnapshot();
    }).catch().finally();
  })