//test.js
import Vue from 'vue';
import reviewsComponent from './components/reviewsComponent';
import axios from 'axios';
import VueRouter from 'vue-router';

test('review component to havea mount option', () => {
  expect(typeof reviewsComponent.mounted).toBe('function');
});

test('check the reviews list data type', () => {
  expect(typeof reviewsComponent.data).toBe('function')
  const defualtData = reviewsComponent.data();
  expect(typeof defualtData.reviewsList).toBe('object');
 });


 test('sets the reviews list data after mount', () => {
   const vm = new Vue(reviewsComponent);
   return vm.$nextTick().then(()=> {
     
     expect(vm.reviewsList).not.toHaveLength(0);
   })
 });

 it('renders link', () => {
   const vm = new Vue(reviewsComponent);
   vm.$nextTick().then(()=> {

    expect(vm).toMatchSnapshot();
   }).catch().finally();
 });