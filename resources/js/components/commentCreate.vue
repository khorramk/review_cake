<template>
    <div class="comment-create__container">
        <form @submit.prevent="addComments" class="comment-create__container__create-comment-form" >
            <textarea class="comment-create__container__create-comment-form__body" name="comment" id="" cols="30" rows="10"  v-model="commentBody"></textarea>
            <button :disabled="isDisable" class="comment-create__container__create-comment-form__submit-btn" name="Submit" type="submit" value="add comments">Submit</button>
        </form>
    </div>
</template>
<script>
export default {
    data(){
        return {
            commentBody: '',
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
        this.isDisable = true;
        axios.post('/api/comments', {
            'reviewId': this.$props.reviewId,
            'commentBody': this.commentBody
        }).then(()=> {
            window.location.href = '/api/reviews';
        });  
        }
    }
};
</script>

