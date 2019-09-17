<template>
        <form class="edit-form form-container" @submit.prevent="editReview">
            <textarea class="edit-form__body" name="body" id="" cols="30" rows="10" v-model="editsReviews"></textarea>
            <input class="edit-form__submit-btn" :disabled="isDisable" type="submit" value="edit review">
        </form>
</template>
<script>
export default {
    data() {
        return {
            editsReviews: '',
            isDisable: false,
        }
    },
    methods: {
        editReview() {
            axios.put(`/api/reviews/${this.$route.params.id}`, {
                reviewId: this.$route.params.id,
                reviewsEdits: this.editsReviews
            }).then(() => window.location.href = '/reviews');
            this.isDisable = true;
        }
    },
    props: {
        review: {
            default: null,
            type: String
        },
        id: {
            default: null,
            type: Number
        }
    }
}
</script>
