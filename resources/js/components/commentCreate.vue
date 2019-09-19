<template>
        <form v-on:submit.prevent="addComments" class="create-comment-form form-container">
            <textarea class="create-comment-form__body" name="comment" id="" cols="30" rows="10" v-model="comments"></textarea>
            <button :disabled="this.$store.state.isDisable" class="create-comment-form__submit-btn" name="Submit" type="submit" value="add comments">Submit</button>
        </form>
</template>
<script>
export default {
  data() {
      return {
          comments: ''
      }
  },
  //adding comments to reviews
  methods: {
    addComments(){
       this.$store.commit('disableButton');
        axios.post('/api/comments', {
            reviewId: this.$route.params.id,
            commentBody: this.$data.comments
        }).then(()=> {
            window.location.href = '/reviews';
        });  
    }
  }
};
</script>

