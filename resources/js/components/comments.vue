<template>
    <div >
        <div class="col border  comments-card_single-comments__wrapper" v-for="(comment, i) in comments" :key="i" v-bind:checked="checked" v-on:change="$emit('change', $event.target.checked)" v-on:idChecker="checkId(comment.review_id)">
            <div class="card-body comment-card__single-card" >
                {{ comment.comments }}
                <a class="review-card__single-review_edit-comment" style="float:right;" :href="`/api/comments/${comment.id}/edit`">🖉</a>
                <form  class="review-card__single-review_remove-comment" style="float:right;" @submit="submit(comment.id)" >
                    <input type="submit" style="color:teal; background:none; border:none; padding-right:30px;" value="⨯">
                </form>
            </div>
        </div>
    </div>               
</template>

<script>
import Axios from 'axios';
import {EventBus} from '../app';
    export default {
        data() {
            return {
               checked: Boolean
            };
        },
       
        methods: {
            submit(id){
                Axios.delete(`/api/comments/${id}`);
            },
        },
        props: ['reviewId', 'title', 'comments', 'commentId']
    };
</script>

<style lang="scss" scoped>
     .comments-card_single-comments__wrapper{
         border: solid 2px blue;
     }
</style>