 <template>
     <div class="form-edit-container">
         {{ reviewName }}
        <form class="form-edit-container__form-edit-comments" @submit.prevent="update">
            <textarea class="form-edit-container__form-edit-comments__body" name="comment_edit" v-model="edit_body" id="" cols="30" rows="10"></textarea>
            <input class="form-edit-comments-btn" type="submit" value="add comments">
        </form>
     </div>
 </template>
 
 <script>
import Axios from 'axios';
     export default {
         data(){
             return {
                 csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                 edit_body: ''
             };
         },
        methods: {
            update(){
                console.log(this.edit_body);
                Axios.put(`/api/comments/${this.commentId}`, {comment: this.edit_body})
                    .then(()=> window.location.href = '/api/reviews')
                    .catch((err)=> console.log(err));
            }
        },
        props: {
            commentId: {
                type: Number
            },
            reviewName: {
                type: String
            }
        }
     }
 </script>
 
 <style lang="scss" scoped>
 
 </style>