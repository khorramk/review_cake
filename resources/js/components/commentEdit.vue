 <template>
     <div class="form-edit-container">
         {{ comment.comments }}
        <form class="form-edit-container__form-edit-comments" @submit="submit" method="POST">
            <input class="form-edit-container__form-edit-comments__token" type="hidden" name="_token" :value="csrf">
            <textarea class="form-edit-container__form-edit-comments__body" name="comment_edit" id="" cols="30" rows="10"></textarea>
            <input class="form-edit-comments-btn" type="submit" value="add comments">
        </form>
     </div>
 </template>
 
 <script>
import Axios from 'axios';
     export default {
         data(){
             return {
                 comment: '',
                 csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
             };
         },
         mounted(){
             Axios.get('/api/comment/comments')
                  .then((resp)=> {
                      console.log(resp.data);
                      this.comment = resp.data;
                      return this.comment;
                  })
                  .catch((err)=> console.log(err));
         },
        methods: {
            submit(){
                Axios.post('/comments');
               
            }
        }
     }
 </script>
 
 <style lang="scss" scoped>
 
 </style>