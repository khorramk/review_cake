<template>
        <form @submit.prevent="addComments" class="create-comment-form form-container">
            <textarea class="create-comment-form__body" name="comment" id="" cols="30" rows="10"  v-model="commentBody"></textarea>
            <button :disabled="isDisable" class="create-comment-form__submit-btn" name="Submit" type="submit" value="add comments">Submit</button>
        </form>
</template>
<script>
export default {
   
};
</script>

