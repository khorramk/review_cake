 <template>
        <form class="form-edit-container__form-edit-comments form-container" @submit.prevent="updateComments">
            <textarea class="form-edit-container__form-edit-comments__body" v-model="editBody" id="" cols="30" rows="10"></textarea>
            <input :disabled="$store.state.isDisable" class="form-edit-comments-btn" type="submit" value="add comments">
        </form>
</template>
<script>
export default {
    data() {
        return {
            editBody: ''
        }
    },
    methods: {
        //updating Comments
        updateComments(){
          this.$store.commit('disableButton');
            axios.put(`/api/comments/${this.$route.params.id}`, {
                comment: this.editBody,
            }).then(()=> {
                    window.location.href = '/reviews';
                })
              .catch((err)=> console.log(err));
        }
    },
};
</script>
