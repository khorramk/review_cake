<template>
        <div class="card-body reviews-card__body">
            <div class="card reviews-card__single-review__wrapper">
                <div class="card-body reviews-card__single-review">
                    {{this.$props.reviews.reviews}}
                    <router-link class="review-card__single-review_add-comment" :to="`/comments/create/${$props.reviews.id}`">🗨</router-link>
                    <router-link class="review-card__single-review_edit-review" :to="`/reviews/${$props.reviews.id}/edit`">🖉</router-link>
                    <form  class="review-card__single-review_remove-review" @submit.prevent="removeReview($props.reviews.id)">
                        <button :disabled="this.$store.state.isDisable" type="submit" class="button-remove">⨯</button>
                    </form>
                </div>
            </div>
            <CommentsComponent v-for="(comment, i) in comments" :key="i"  :comment="comment" :review-id="$props.reviews.id"/>
        </div>        
</template>
<script>
import CommentsComponent from "./CommentsComponent";
export default {
    props: {
        reviews: {
            default() {
                return {}
            },
            type: Object
        },
        comments: {
            default(){
                return {}
            },
             type: Array
        }
    },
    methods: {
        //remove reviews
        removeReview(id){
           this.$store.commit('disableButton');
            axios.delete(`/api/reviews/${id}`, {
                id
            }).then(()=> {
                window.location.href= '/reviews';
            });       
        },
    },
    components: {
        CommentsComponent
    },
    
};
</script>
