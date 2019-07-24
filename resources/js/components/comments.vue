<template>
    <div v-if="comment.id === comment.review_id">
        <div class="col border  comments-card_single-comments__wrapper" >
            <h1>comments</h1>
            <!-- <div class="card-body comment-card__single-card" >
                {{ comment.comments }}
                <a class="review-card__single-review_edit-comment" style="float:right;" :href="`/api/comments/${comment.id}/edit`">🖉</a>
                <form  class="review-card__single-review_remove-comment" style="float:right;" @submit="submit(comment.id)" >
                    <input type="hidden" name="_token" value="csrf">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="submit" style="color:teal; background:none; border:none; padding-right:30px;" value="⨯">
                </form>
            </div> -->
        </div>
    </div>               
</template>

<script>
import Axios from 'axios';
    export default {
        data() {
            console.log(this.comment);
            return {
                 csrf: '', 
            };
        },
        methods: {
            submit(id){
                Axios.delete(`/api/comments/${id}`);
            }  
        },
        props: ['reviewId', 'title', 'comment']
    };
</script>

<style lang="scss" scoped>

</style>