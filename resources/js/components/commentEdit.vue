 <template>
     <div class="form-edit-container">
         {{ getUri }}
        <form class="form-edit-container__form-edit-comments" @submit="submit">
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

        computed:{
            getUri(){
               ;
            }
        },
        methods: {
            submit(){
                console.log(window.location.href);
               // Axios.put('/comments/{}/edit');
               
            }
        }
     }
 </script>
 
 <style lang="scss" scoped>
 
 </style>