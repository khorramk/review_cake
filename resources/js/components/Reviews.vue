<template>
    <div>
        <div class="card-body reviews-card__body" v-show="$props.reviews.reviews">
            <div class="card reviews-card__single-review__wrapper">
                <div class="card-body reviews-card__single-review">
                        {{ this.$props.reviews.reviews}}
                        <a  class="review-card__single-review_add-comment" style="float:right;  color:blue;  margin-left:10px;" :href="`/comments/create/${$props.reviewId}`">🗨</a>
                        <a class="review-card__single-review_edit-review" style="float:right;  color:blue;  margin-left:10px;" :href="`/reviews/${$props.reviewId}/edit`" >🖉</a>
                        <form  class="review-card__single-review_remove-review" style="float:right;  color:blue;  margin-left:10px;"   @submit="remove($props.reviewId)">
                            <button :disabled="isDisable" type="submit" style="color:teal; background:none; border:none; " >⨯</button>
                        </form>
                </div>
            </div>
            <CommentsComponent v-for="(comment, i) in comments" :key="i" :comment="comment"/>
        </div>        
    </div>
</template>

<script>
import Axios from 'axios';
import CommentsComponent from "./CommentsComponent";
    export default {
        data() {
            return {
                comments: '',
                isDisable: false
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
            Axios.get(`/api/cake-component/comments/${this.$props.reviewId}`)
                    .then((resp)=> {
                        if(resp.data.length === 0){
                            this.comments = '';
                            console.log(this.comments);
                            return 0;
                        };
                        this.comments = resp.data;
                        console.log(this.comments);
                        return 0 
                    })
                    .catch((err)=> console.log(err))
                    .catch((err)=> console.log(err));
                
        },
        methods: {
            remove(id){
                this.$data.isDisable = true;
                Axios.delete(`/api/reviews/${id}`, {
                    id: id
                }).then(()=> {
                    
                    window.location.href= '/api/reviews';
                });    
                   
            },
        },
        components: {
            CommentsComponent
        }
    }
</script>

<style lang="scss" scoped>

</style>