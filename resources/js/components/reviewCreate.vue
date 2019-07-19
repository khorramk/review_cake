<template>
    <div>
        <form action="/reviews" @submit="checkform" method="POST" class="create-form-reviews" style="display:flex; flex-direction:column;" >
            <input type="hidden" name="_token" :value="csrf">
            <label for="review_creation">write your reviews</label>
            <textarea name="review_creation" id="" cols="30" rows="10" v-model="review_creation"></textarea>
            <input type="submit" value="add your review">
        </form>
    </div>
</template>

<script>
import Axios from 'axios';
    //import reviewsComponent from './reviewsComponent';
    export default {
        data(){
            return {
              
                review_creation: '',
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        },

        methods: {
            checkform(e){
                console.log('not working');
              //  e.preventDefault();
                Axios.post('/reviews', this.data);
                return true;
            }
        }

        
    }
</script>

<style lang="scss" scoped>

</style>