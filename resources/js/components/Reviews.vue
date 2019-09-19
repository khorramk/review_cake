<template>
        <div class="card-body reviews-card__body">
            <div class="card reviews-card__single-review__wrapper">
                <div class="card-body reviews-card__single-review">
                    {{this.$props.review.reviews}}
                    <router-link class="review-card__single-review_add-comment" :to="`/comments/create/${$props.review.id}`">🗨</router-link>
                    <router-link class="review-card__single-review_edit-review" :to="`/reviews/${$props.review.id}/edit`">🖉</router-link>
                    <form  class="review-card__single-review_remove-review" v-on:submit.prevent="remove($props.review.id)">
                        <button :disabled="isDisable" type="submit" class="button-remove">⨯</button>
                    </form>
                </div>
            </div>
            <CommentsComponent v-for="(comment, i) in $props.comments" :key="i"  :comment="comment" :review-id="$props.review.id" v-model="loading"/>
        </div>        
</template>
<script>
import CommentsComponent from "./CommentsComponent";
export default {
    data() {
        return {
            error: false,
            isDisable: false,
            loading: true,
            
        }
    },
    props: {
        review: {
            default() {
                return {}
            },
            type: Object
        },
        comments: {
            default(){
                return Array(0);
            },
            type: Array
        }
    },
    methods: {
        remove(id){
            this.isDisable = true;
            axios.delete(`/api/reviews/${id}`).then(()=> {
                window.location.href= '/reviews';
            });       
        },
    },
    components: {
        CommentsComponent
    },
    
};
</script>
