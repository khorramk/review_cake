<template>
    <div>
        {{ review }}
        <form @submit.prevent="editReview">
            <textarea name="body" id="" cols="30" rows="10" v-model="editsReviews"></textarea>
            <input :disabled="isDisable" type="submit" value="edit review">
        </form>
    </div>
</template>
<script>
export default {
    data() {
        return {
            editsReviews: '',
            isDisable: false
        }
    },
    methods: {
        editReview() {
            axios.put(`/api/reviews/${this.id}`, {
                review_id: this.id,
                reviews_edits: this.edits_reviews
            }).then(() => window.location.href = '/api/reviews');
            $data.isDisable = true;
        }
    },
    props: {
        review: {
            default:null,
            type: String
        },
        id: {
            default: null,
            type: Number
        }
    }
}
</script>
