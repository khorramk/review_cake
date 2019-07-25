<template>
    <div >
        
        <div class="col comments-card_single-comments__wrapper">
            <div class="card-body comment-card__single-card" >
               {{this.$props.comment.comments}}
                <a class="review-card__single-review_edit-comment" style="float:right;" :href="`/comments/${$props.comment.id}/edit`">🖉</a>
                <form  class="review-card__single-review_remove-comment" style="float:right;" @submit="submit($props.comment.id)">
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
              reviewIds: ''
            };
        },
        methods: {
            submit(id){
                Axios.delete(`/api/comments/${id}`);
            } ,
        },
        props: ['comment']
    };
</script>

<style lang="scss" scoped>
     .comments-card_single-comments__wrapper{
         border: solid 2px blue;
     }
</style>