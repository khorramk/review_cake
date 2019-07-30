<template>
    <div class="comment-create__container">
        <form @submit.prevent="addComments" class="comment-create__container__create-comment-form" >
            <textarea class="comment-create__container__create-comment-form__body" name="comment" id="" cols="30" rows="10"  v-model="comment_body"></textarea>
            <button :disabled="isDisable" class="comment-create__container__create-comment-form__submit-btn" name="Submit" type="submit" value="add comments">Submit</button>
        </form>
    </div>
</template>

<script>
import Axios from 'axios';
    export default {
        data(){
            return {
                comment_body: '',
                isDisable: false
            }
        },
        props: {
            reviewId: {
                default: null,
                type: Number
            },
        },
        methods: {
            addComments(){
               this.$data.isDisable = true;
               Axios.post('/api/comments', {
                   'reviewId': this.$props.reviewId,
                   'comment_body': this.comment_body
               }).then(()=> {
     
                   window.location.href = '/api/reviews';
               });  
            }
        }
    };
</script>

