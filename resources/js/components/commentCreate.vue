<template>
    <div class="comment-create__container">
        
        <form class="comment-create__container__create-comment-form" @submit="addComments">
            <textarea class="comment-create__container__create-comment-form__body" name="comment" id="" cols="30" rows="10"  v-model="comment_body"></textarea>
            <button class="comment-create__container__create-comment-form__submit-btn" type="submit" value="add comments">Submit</button>
        </form>
    </div>
</template>

<script>
import Axios from 'axios';
    export default {
        data(){
            return {
                comment_body: '',
            }
        },
        props: {
            reviewId: {
                default: null,
                type: Number
            },
        },
        methods: {
            addComments(e){
               Axios.post('/api/comments', {
                   'reviewId': this.$props.reviewId,
                   'comment_body': this.comment_body
               }).then(()=> window.location.href = '/api/reviews');
                 e.preventDefault();
            }
        }
    };
</script>

