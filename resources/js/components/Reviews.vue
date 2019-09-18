<template>
        <div class="card-body reviews-card__body" v-show="$props.reviews.reviews">
            <div class="card reviews-card__single-review__wrapper">
                <div class="card-body reviews-card__single-review">
                    {{this.$props.reviews.reviews}}
                    <router-link class="review-card__single-review_add-comment" :to="`/comments/create/${$props.reviews.id}`">🗨</router-link>
                    <router-link class="review-card__single-review_edit-review" :to="`/reviews/${$props.reviews.id}/edit`">🖉</router-link>
                    <form  class="review-card__single-review_remove-review" v-on:submit.prevent="remove($props.reviews.id)">
                        <button :disabled="isDisable" type="submit" class="button-remove">⨯</button>
                    </form>
                </div>
            </div>
            <CommentsComponent v-for="(comment, i) in comments" :key="i" :comment="comment" v-model="loading"/>
        </div>        
</template>
<script>
import CommentsComponent from "./CommentsComponent";
export default {
    data() {
        return {
            comments: [''],
            error: false,
            isDisable: false,
            loading: true,
            
        }
    },
    props: {
        reviews: {
            default() {
                return {}
            },
            type: Object
        }
    },
    beforeUpdate(){
        
            // axios.get(`/api/comments/${this.reviews.id}`)
            // .then((resp)=> {
            //     if(resp.data.length === 0){
            //         this.comments = '';
            //     };
            //     console.log(resp.data);
            //     this.comments = resp.data;
            // })
            // .catch(err => this.error = true)
            // .finally(()=> this.loading = false);
            console.log('review mounted', this.reviews);
            axios({
                method: 'get',
                url: `/api/comments/${this.reviews.id}`,
                
            }).then((resp)=> this.comments = resp.data).catch((err)=> console.log(err));
        
    },
    methods: {
        remove(id){
            this.isDisable = true;
            axios.delete(`/api/reviews/`, {
                params: {
                    id
                }
            }).then(()=> {
                window.location.href= '/reviews';
            });       
        },
    },
    components: {
        CommentsComponent
    }
};
</script>
