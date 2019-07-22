<template>
    <div>
        <div class="col border border-primary comments-card_single-comments__wrapper" v-for="comment in comments" v-bind:key="comment.id" v-show="comment.review_id === reviewId">
            <div class="card-body comment-card__single-card" >
                {{ comment.comments }}
                <a class="review-card__single-review_edit-comment" style="float:right;" :href="'/comments/edit/' + comment.id">🖉</a>
                <form  class="review-card__single-review_remove-comment" style="float:right;" @submit="submit(comment.id)" method="POST" >
                    <input type="hidden" name="_token" value="csrf">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="submit" style="color:teal; background:none; border:none; padding-right:30px;" value="⨯">
                </form>
            </div>
        </div>
    </div>               
</template>

<script>
import Axios from 'axios';
    export default {
        data() {
            return {
                 comments: '',
                 csrf: '',
                 authorised: true
            };
        },
        methods: {
            submit(id){
                Axios.post(`/comments/${id}`, this.data);
            }  
        },
        props: ['reviewId', 'title']
    };
</script>

<style lang="scss" scoped>

</style>