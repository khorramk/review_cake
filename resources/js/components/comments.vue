<template>
    <div>
        <div class="col border border-primary comments-card_single-comments__wrapper" v-for="comment in comments" v-bind:key="comment.id" v-show="comment.review_id === reviewId">
            <div class="card-body comment-card__single-card" >
                {{ comment.comments }}
                <a class="review-card__single-review_edit-comment" style="float:right;" :href="'/comments/'+ comment.id + '/edit'">🖉</a>
                <form  class="review-card__single-review_remove-comment" style="float:right;" @submit="submit(comment.id)" >
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
        mounted(){
            Axios.get('/api/cake-component/comments')
                    .then((resp)=> {
                        console.log(resp.data);
                        this.comments = resp.data;
                    })
                    .catch((err)=> console.log(err));
        },
        methods: {
            submit(id){
                Axios.delete(`/api/comments/${id}`);
            }  
        },
        props: ['reviewId', 'title']
    };
</script>

<style lang="scss" scoped>

</style>