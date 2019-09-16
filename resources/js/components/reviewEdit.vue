<template>
    <div>
        {{ review }}
        <form @submit.prevent="editReview">
            <textarea name="body" id="" cols="30" rows="10" v-model="editsReviews"></textarea>
            <input type="hidden" :name="_csrf" value="token">
            <input :disabled="isDisable" type="submit" value="edit review">
        </form>
    </div>
</template>
<script>
export default {
    data() {
        return {
            editsReviews: '',
            isDisable: false,
            _csrf: docum
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
