
export const mutations = {
    //fetch reviews
    fetchReview(state){
        axios.get('/api/reviews')
            .then((response)=> state.reviewsList = response.data)
            .catch((err)=> console.log(err))
   },
   //set the button to be disabled
   disableButton(state){
       state.isDisable = true;
   }
}