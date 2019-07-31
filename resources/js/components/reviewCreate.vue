<template>
    <div class="form-reviews-container">
        <form  v-on:submit.prevent="checkform"  class="form-reviews-container__create-form-reviews form-container">
            <label class="form-reviews-container__create-form-reviews__review-creation__label" for="review_creation">write your reviews</label>
            <textarea class="form-reviews-container__create-form-reviews__review-creation-body" v-model="review_creation" id="" cols="30" rows="10"></textarea>
            <input :disabled="isDisable" class="form-reviews-container__create-form-reviews__review-creation-submit-btn"  type="submit" value="add your review">
        </form>
    </div>
</template>
<script>
    export default {
        data(){
            return {
                review_creation: '', 
                isDisable: false
            };
        },
        methods: {
            checkform(){
                this.data.isDisable = true;
                axios.post('/api/reviews',{
                    review_creation: this.review_creation,
                    })
                    .then(()=> {
                         window.location.href = '/api/reviews';
                         return true;
                    })
                    .catch((err)=> console.log(err));
            }
        }
    };
</script>

