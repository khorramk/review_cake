<template>
    <div class="form-reviews-container">
        <form  @submit.prevent="checkform"  class="form-reviews-container__create-form-reviews" style="display:flex; flex-direction:column;" >
            <label class="form-reviews-container__create-form-reviews__review-creation__label" for="review_creation">write your reviews</label>
            <textarea class="form-reviews-container__create-form-reviews__review-creation-body" v-model="review_creation" id="" cols="30" rows="10"></textarea>
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
            };
        },
        methods: {
            checkform(){
                
                Axios.post('/api/reviews',{
                    review_creation: this.review_creation
                })
                    
                    .catch((err)=> console.log(err));
                
            }
        }
    };
</script>

