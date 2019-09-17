//test.js
import { mount, shallowMount } from '@vue/test-utils';
import reviewsComponent from './components/reviewsComponent';
import axios from 'axios';
jest.mock('axios');


describe('Review-Component', ()=> {
    
    it('wrapper name should be reviewsComponent',  ()=> {
      //name defining
      const wrapper = mount(reviewsComponent);
    //  const reviewsList = axios.get('/cake-component/review').then
      wrapper.setMethods({getRequest: ()=> {
        return ['cakes']
      }})
    
    });

    it('data should have reviewList array',  ()=> {
      //settingData
      const wrapper = mount(reviewsComponent);
      const vm = wrapper.vm;

      expect(vm.$data.reviewsList.value).toBe([]);
     
     
    })

   
});