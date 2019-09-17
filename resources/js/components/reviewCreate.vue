<template>
        <form  v-on:submit.prevent="checkform"  class="create-form-reviews form-container">
            <label class="create-form-reviews__review-creation__label" for="review_creation">write your reviews</label>
            <textarea class="create-form-reviews__review-creation__body" v-model="reviewCreation" id="" cols="30" rows="10"></textarea>
            <input :disabled="isDisable" class="create-form-reviews__review-creation__submit-btn"  type="submit" value="add your review">
        </form>
</template>
<script>
export default {
    data(){
        return {
            isDisable: false,
            reviewCreation: ''
        };
    },
    methods: {
        checkform(){
            this.isDisable = true;
            axios.post('/api/reviews',{
                reviewCreation: this.reviewCreation,
                })
                .then(()=> {
                    window.location.href = '/reviews';
                })
                .catch((err)=> console.log(err));
        }
    }
};
</script>

