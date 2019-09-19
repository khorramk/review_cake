<template>
        <form  v-on:submit.prevent="checkform"  class="create-form-reviews form-container">
            <label class="create-form-reviews__review-creation__label" for="review_creation">write your reviews</label>
            <textarea class="create-form-reviews__review-creation__body" v-model="reviewCreation" id="" cols="30" rows="10"></textarea>
            <input :disabled="isDisable" class="create-form-reviews__review-creation__submit-btn"  type="submit" value="add your review">
        </form>
</template>
<script>
export default {
   
};
</script>

