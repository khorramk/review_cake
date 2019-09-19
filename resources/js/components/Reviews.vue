<template>
        <div class="card-body reviews-card__body" v-show="$props.reviews.reviews">
            <div class="card reviews-card__single-review__wrapper">
                <div class="card-body reviews-card__single-review">
                    {{this.$props.reviews.reviews}}
                    <router-link class="review-card__single-review_add-comment" :to="`/comments/create/${$props.reviewId}`">🗨</router-link>
                    <router-link class="review-card__single-review_edit-review" :to="`/reviews/${$props.reviewId}/edit`">🖉</router-link>
                    <form  class="review-card__single-review_remove-review" @submit.prevent="$store.commit('removeReview', $props.reviewId)">
                        <button :disabled="this.$store.state.isDisable" type="submit" class="button-remove">⨯</button>
                    </form>
                </div>
            </div>
            <CommentsComponent v-for="(comment, i) in comments" :key="i" :comment="comment" v-model="loading"/>
        </div>        
</template>
<script>
import CommentsComponent from "./CommentsComponent";
export default {
    props: {
        reviews: {
            default: {},
            type: Object
        },
        reviewId: {
            default: 0,
            type: Number
        }
    },
    components: {
        CommentsComponent
    }
};
</script>
