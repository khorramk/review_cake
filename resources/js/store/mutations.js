
export const mutations = {
    //feth reviews
    fetchReview(state){
        axios.get('/api/cake-component/review')
            .then((response)=> state.reviewsList = response.data)
            .catch((err)=> console.log(err))
   },
   //remove reviews
   removeReview(state, id){
        state.isDisable = true;
        axios.delete(`/api/reviews/${id}`, {
            id
        }).then(()=> {
            window.location.href= '/reviews';
        });       
    },
    //method for review creation
    reviewCreation(state){
        this.isDisable = true;
        axios.post('/api/reviews',{
            reviewCreation: this.reviewCreation,
            })
            .then(()=> {
                window.location.href = '/reviews';
            })
            .catch((err)=> console.log(err));
    },
    //deleteting Comments
    deleteComments(state, id){  
        state.isDisable = true;
        axios.delete(`/api/comments/${id}`)
             .then(()=> window.location.href = '/reviews');
    },
    //updating Comments
    updateComments(state, id){
        state.isDisable = true;
        axios.put(`/api/comments/${this.$route.params.id}`, {
            comment: this.editBody,
        })
            .then(()=> {
                window.location.href = '/reviews';
            })
            .catch((err)=> console.log(err));
        
    },
    //adding comments to reviews
    addComments(state){
        state.isDisable = true;
        axios.post('/api/comments', {
            reviewId: this.$route.params.id,
            commentBody: this.commentBody
        }).then(()=> {
            window.location.href = '/reviews';
        });  
    },
    //editing comments
    editReview(state) {
        axios.put(`/api/reviews/${this.$route.params.id}`, {
            reviewId: this.$route.params.id,
            reviewsEdits: this.editsReviews
        }).then(() => window.location.href = '/reviews');
        this.isDisable = true;
    },
}