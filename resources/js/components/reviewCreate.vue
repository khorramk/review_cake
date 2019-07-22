<template>
    <div class="form-reviews-container">
        <form action="/reviews" @submit="checkform" method="POST" class="form-reviews-container__create-form-reviews" style="display:flex; flex-direction:column;" >
            <input class="form-reviews-container__create-form-reviews__token" type="hidden" name="_token" :value="csrf">
            <label class="form-reviews-container__create-form-reviews__review-creation__label" for="review_creation">write your reviews</label>
            <textarea class="form-reviews-container__create-form-reviews__review-creation-body" name="review_creation" id="" cols="30" rows="10" v-model="review_creation"></textarea>
            <input class="form-reviews-container__create-form-reviews__review-creation-submit-btn" type="submit" value="add your review">
        </form>
    </div>
</template>

<script>
import Axios from 'axios';
    export default {
        data(){
            return {
                review_creation: '',
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            };
        },
        methods: {
            checkform(e){
                Axios.post('/reviews');
                return true;
            }
        }
    };
</script>

