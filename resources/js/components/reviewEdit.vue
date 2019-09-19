<template>
        <form class="edit-form form-container" @submit.prevent="editReview">
            <textarea class="edit-form__body" name="body" id="" cols="30" rows="10" v-model="editsReviews"></textarea>
            <input class="edit-form__submit-btn" :disabled="isDisable" type="submit" value="edit review">
        </form>
</template>
<script>
export default {
    
}
</script>
