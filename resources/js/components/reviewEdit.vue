<template>
    <div>
        <form @submit="editReview">
            <textarea name="body" id="" cols="30" rows="10" v-model="edits_reviews"></textarea>
            <input type="submit" value="edit review">
        </form>
    </div>
</template>

<script>
import Axios from 'axios';
    export default {
        data() {
            return {
                review: '',
                edits_reviews: ''
            }
        },
        methods: {
            editReview() {
                Axios.put(`/api/reviews/${this.reviewId}`, {
                    review: this.review,
                    reviews_edits: this.edits_Reviews
                })
            }
        },
    }
</script>

<style lang="scss" scoped>

</style>