<template>
    <div>
        <div class="col comments-card_single-comments__wrapper">
            <div class="card-body comment-card__single-card" >
               {{this.$props.comment.comments}}
                <router-link :to="`/comments/${$props.comment.id}/edit`">🖉</router-link>
                <form  class="review-card__single-review_remove-comment right-side" v-on:submit.prevent="submit($props.comment.id)">
                    <input :disabled="isDisable" type="submit" class="button-remove p-r" name="btnDelete" value="⨯">
                </form>
            </div>
        </div>
    </div>               
</template>
<script>
export default {
    data() {
        return {
            isDisable: false
        };
    },
    methods: {
        submit(id){  
            this.isDisable = true;
            axios.delete(`/api/comments/${id}`)
                 .then(()=> window.location.href = '/reviews');
        },
    },
    props: {
        comment: {
            default: {},
            type: Object
        }
    }
};
</script>
