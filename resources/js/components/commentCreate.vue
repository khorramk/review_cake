<template>
    <div class="comment-create__container">
        {{'working'}}
        <form class="comment-create__container__create-comment-form" @submit="addComments">
            <input class="comment-create__container__create-comment-form__review-id" type="hidden" name="review_id" value="1">
            <textarea class="comment-create__container__create-comment-form__body" name="comment" id="" cols="30" rows="10"></textarea>
            <button class="comment-create__container__create-comment-form__submit-btn" type="submit" value="add comments"></button>
        </form>
    </div>
</template>

<script>
import Axios from 'axios';
    export default {
        data(){
            return {
                comments: '',
                istrue: true
            }
        },
        props: ['review'],
        methods: {
            addComments(){

               return Axios.post('/api/comments');
            }
        }
    };
</script>

