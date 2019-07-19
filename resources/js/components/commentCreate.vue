<template>
    <div>
        {{'working'}}
        <form @submit="addComments()" method="POST">
            <input type="hidden" name="review_id" value="1">
            <textarea name="comment" id="" cols="30" rows="10"></textarea>
            <input type="submit" value="add comments" v-model="comments">
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
        props: ['comment'],
        methods: {
            addComments(){
                Axios.post('/comments', this.data)
            }
        }
    }
</script>

