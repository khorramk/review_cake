<template>
        <form  v-on:submit.prevent="reviewCreation"  class="create-form-reviews form-container">
            <label class="create-form-reviews__review-creation__label" for="review_creation">write your reviews</label>
            <textarea class="create-form-reviews__review-creation__body" v-model="reviewBody" id="" cols="30" rows="10"></textarea>
            <input :disabled="$store.state.isDisable" class="create-form-reviews__review-creation__submit-btn"  type="submit" value="add your review">
        </form>
</template>
<script>
export default {
   data() {
       return {
           reviewBody: ''
       }
   },
   methods: {
        //method for review creation
    reviewCreation(){
        this.$store.commit('disableButton');
        axios.post('/api/reviews',{
            reviewCreation: this.reviewBody,
            })
            .then(()=> {
                window.location.href = '/reviews';
            })
            .catch((err)=> console.log(err));
    }
   },
};
</script>

