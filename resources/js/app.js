/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
window.Vue = require('vue');
import reviewCreate from './components/reviewCreate';
import reviewsComponent from './components/reviewsComponent';
import commentCreate from './components/commentCreate';
import commentEdit from './components/commentEdit';
import reviewEdit from './components/reviewEdit';
export const EventBus = new Vue({});
const axio = require('axios');
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
const app = new Vue({
    el: '#app',
    components: {
            reviewCreate,
            reviewsComponent,
            commentCreate,
            commentEdit,
            reviewEdit
    },
});





