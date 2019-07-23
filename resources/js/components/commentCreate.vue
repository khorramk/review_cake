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
            comment: {
                default: null,
                type: Number
            },
        },
        methods: {
            addComments(){
               Axios.post('/api/comments', {
                   'comment': this.comment,
                   'comment_body': this.comment_body
               }).then(()=> window.location.href = '/api/reviews');
            }
        }
    };
</script>

