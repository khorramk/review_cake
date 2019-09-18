

import Vue from 'vue';
import axios from 'axios';
import VueRouter from 'vue-router';
import reviewEdit from './components/reviewEdit';

const vm = new Vue(reviewEdit);

test('type of data for reviews edits should be in string', () => {
    expect(vm.reviewsEdits).toBe('')
});

test('disable the button after submit request', () => {
    vm.$on('submit', ()=> {
        expect(vm.isDisable).toBe(true)
    })
});
it('renders correct elements', () => {
    
    vm.$nextTick().then(()=> {
 
     expect(vm).toMatchSnapshot();
    }).catch().finally();
  })