<template>
    <div>
        {{ review }}
        <form @submit.prevent="editReview">
            <textarea name="body" id="" cols="30" rows="10" v-model="edits_reviews"></textarea>
            <input :disabled="isDisable" type="submit" value="edit review">
        </form>
    </div>
</template>

<script>
import Axios from 'axios';
    export default {
        data() {
            return {
                edits_reviews: '',
                isDisable: false
            }
        },
        methods: {
            editReview() {
                Axios.put(`/api/reviews/${this.id}`, {
                    review_id: this.id,
                    reviews_edits: this.edits_reviews
                }).then(() => window.location.href = '/api/reviews');
                this.$data.isDisable = true;
            }
        },
        props: {
            review: {
                defualt:null,
                type: String
            },
            id: {
                defualt: null,
                type: Number
            }
        }
    }
</script>
