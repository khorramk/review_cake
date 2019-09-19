import Vuex from 'vuex';
import Vue from 'vue';
import axios from 'axios';

Vue.use(Vuex);
export const store = new Vuex.Store({ 
    state: {
        reviewsList: '',
        comment: '',
        isDisable: false,
        editsReviews: ''

    },
    mutations: {
       fetchReview(state){
            axios.get('/api/cake-component/review')
                .then((response)=> state.reviewsList = response.data)
                .catch((err)=> console.log(err))
       },
       removeReview(state, id){
            state.isDisable = true;
            axios.delete(`/api/reviews/${id}`, {
                id
            }).then(()=> {
                window.location.href= '/reviews';
            });       
        },
        checkform(){
            this.isDisable = true;
            axios.post('/api/reviews',{
                reviewCreation: this.reviewCreation,
                })
                .then(()=> {
                    window.location.href = '/reviews';
                })
                .catch((err)=> console.log(err));
        },
        submit(id){  
            this.isDisable = true;
            axios.delete(`/api/comments/${id}`)
                 .then(()=> window.location.href = '/reviews');
        },
        update(){
            this.isDisable = true;
            axios.put(`/api/comments/${this.$route.params.id}`, {
                comment: this.editBody,
            })
                .then(()=> {
                    window.location.href = '/reviews';
                })
                .catch((err)=> console.log(err));
            
        },
        addComments(){
            this.isDisable = true;
            axios.post('/api/comments', {
                reviewId: this.$route.params.id,
                commentBody: this.commentBody
            }).then(()=> {
                window.location.href = '/reviews';
            });  
        },
        editReview() {
            axios.put(`/api/reviews/${this.$route.params.id}`, {
                reviewId: this.$route.params.id,
                reviewsEdits: this.editsReviews
            }).then(() => window.location.href = '/reviews');
            this.isDisable = true;
        }
    },
    actions: {

    }
});