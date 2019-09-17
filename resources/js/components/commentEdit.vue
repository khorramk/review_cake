 <template>
        <form class="form-edit-container__form-edit-comments form-container" @submit.prevent="update">
            <textarea class="form-edit-container__form-edit-comments__body" v-model="editBody" id="" cols="30" rows="10"></textarea>
            <input :disabled="isDisable" class="form-edit-comments-btn" type="submit" value="add comments">
        </form>
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
            this.isDisable = true;
            axios.put(`/api/comments/${this.$route.params.id}`, {
                comment: this.editBody,
            })
                .then(()=> {
                    window.location.href = '/reviews';
                })
                .catch((err)=> console.log(err));
            
        }
    },
    props: {
        commentId: {
            default: 0,
            type: Number
        },
        reviewName: {
            default: '',
            type: String
        }
    }
};
</script>
