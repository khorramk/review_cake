<template>
        <form class="edit-form form-container" @submit.prevent="editReview">
            <textarea class="edit-form__body" name="body" id="" cols="30" rows="10" v-model="reviewsEdits"></textarea>
            <input class="edit-form__submit-btn" :disabled="isDisable" type="submit" value="edit review">
        </form>
</template>
<script>
export default {
    data() {
        return {
            reviewsEdits: '',
            isDisable: false,
        }
    },
    methods: {
        editReview() {
            axios.put(`/api/reviews/${this.$route.params.id}`, {
                reviewId: this.$route.params.id,
                reviewsEdits: this.$data.reviewsEdits
            }).then();
            this.isDisable = true;
        }
    },
}
</script>
