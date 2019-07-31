 <template>
     <div class="form-edit-container">
         {{ reviewName }}
        <form class="form-edit-container__form-edit-comments" @submit.prevent="update">
            <textarea class="form-edit-container__form-edit-comments__body" name="comment_edit" v-model="editBody" id="" cols="30" rows="10"></textarea>
            <input :disabled="isDisable" class="form-edit-comments-btn" type="submit" value="add comments">
        </form>
     </div>
</template>
<script>
export default {
    data(){
        return {
            editBody: '',
            isDisable: false
        };
    },
    methods: {
        update(){
            let self = $data;
            axios.put(`/api/comments/${this.$props.commentId}`, {comment: this.$data.edit_body})
                .then(()=> {
                    self.isDisable = true;
                    window.location.href = '/api/reviews';
                })
                .catch((err)=> console.log(err));
        }
    },
    props: {
        commentId: {
            type: Number,
            default: 0
        },
        reviewName: {
            type: String,
            default: ''
        }
    }
};
</script>
