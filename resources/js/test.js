//test.js

import {mount, RouterLinkStub} from '@vue/test-utils';
import { app } from './app';
import reviewsComponent from './components/reviewsComponent';

const wrapper = mount(app);

const vm = wrapper.vm 

console.log(wrapper)

describe('Review-Create-Post-Link', ()=> {
    
    console.log(reviewsComponent);
    it('upon clicking redirect to correct uri', ()=>{
    
        const wrapper = mount(reviewsComponent, {
            stubs: {
              RouterLink: RouterLinkStub
            }
          })
          expect(wrapper.find(RouterLinkStub).to).toBe('/reviews/create')
    }
    )
   
});