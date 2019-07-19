<template>
    <div>
        <div class="col border border-primary comments-card_single-comments__wrapper" >
            <div class="card-body comment-card__single-card" v-for="comment in comments" v-bind:key="comment.id">
                {{ comment.comments }}
                <a class="review-card__single-review_edit-comment" style="float:right;" href="comments/edit">🖉</a>
                <form  class="review-card__single-review_remove-comment" style="float:right;" @submit="submit(comment.id)" method="POST" >
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
                 authorised: true
            }
        },
        mounted(){
            Axios.get('/api/cake-component/comments')
                  .then((resp)=> this.comments = resp.data)
                  .catch((err)=> console.log(err))
        },
        methods: {
            submit(id){
                Axios.post(`/reviews/comments/${id}`, this.data);
            }
            
        },
        props: ['verified']
  
    }
</script>

<style lang="scss" scoped>

</style>