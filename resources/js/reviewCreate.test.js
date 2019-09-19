

import Vue from 'vue';
import axios from 'axios';
import VueRouter from 'vue-router';
import reviewCreate from './components/reviewCreate';

const vm = new Vue(reviewCreate);

test('type of data for reviews create should be in string', () => {
    expect(vm.reviewCreation).toBe('')
});

test('disable the button after submit request', () => {
    vm.$on('submit', ()=> {
        expect(vm.isDisable).toBe(true)
    })
});
it('renders correct elements', () => {
    
    vm.$nextTick().then(()=> {
 
     expect(vm).toMatchSnapshot();
    })
  })