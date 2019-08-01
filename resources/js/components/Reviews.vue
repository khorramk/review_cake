<template>
    <div>
        <div class="card-body reviews-card__body" v-show="$props.reviews.reviews">
            <div class="card reviews-card__single-review__wrapper">
                <div class="card-body reviews-card__single-review">
                    {{ this.$props.reviews.reviews }}
                    <a class="review-card__single-review_add-comment" :href="`/comments/create/${$props.reviewId}`">🗨</a>
                    <a class="review-card__single-review_edit-review" :href="`/reviews/${$props.reviewId}/edit`">🖉</a>
                    <form  class="review-card__single-review_remove-review" @submit="remove($props.reviewId)">
                        <button :disabled="isDisable" type="submit" class="button-remove">⨯</button>
                    </form>
                </div>
            </div>
            <CommentsComponent v-for="(comment, i) in comments" :key="i" :comment="comment" v-model="loading"/>
        </div>        
    </div>
</template>
<script>
import CommentsComponent from "./CommentsComponent";
export default {
    data() {
        return {
            comments: '',
            isDisable: false,
            error: false,
            loading:true
        }
    },
    props: {
        reviews: {
            type: Object,
            default: {}
        },
        reviewId: {
            type: Number,
            default: 0
        }
    },
    mounted(){
        axios.get(`/api/cake-component/comments/${this.$props.reviewId}`)
            .then((resp)=> {
                if(resp.data.length === 0){
                    this.comments = '';
                };
                this.comments = resp.data;
            })
            .catch(err => this.error = true)
            .finally(()=> this.loading = false);
    },
    methods: {
        remove(id){
            this.isDisable = true;
            axios.delete(`/api/reviews/${id}`, {
                id: id
            }).then(()=> {
                window.location.href= '/api/reviews';
            });       
        },
    },
    components: {
        CommentsComponent
    }
};
</script>
