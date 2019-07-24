<template>
    <div class="row justify-content-center reviews-container">
        <div class="col-md-8 reviews-container__content">
            <div class="card reviews-container__content__review-card">
                <div class="card-header reviews-card__header">user review</div>
                <div class="card-body reviews-card__body" v-for="review in reviewsTest" v-bind:key="review.id" v-show="review.reviews">
                    <div class="card reviews-card__single-review__wrapper">
                        <div class="card-body reviews-card__single-review">
                                {{ review.reviews }}
                                <a  class="review-card__single-review_add-comment" style="float:right;  color:blue;  margin-left:10px;" :href="`/comments/create/${review.id}`">🗨</a>
                                <a class="review-card__single-review_edit-review" style="float:right;  color:blue;  margin-left:10px;" :href="`/reviews/${review.id}/edit`" >🖉</a>
                                <form  class="review-card__single-review_remove-review" style="float:right;  color:blue;  margin-left:10px;"   @submit="remove(review.id)">
                                    <button type="submit" style="color:teal; background:none; border:none; " >⨯</button>
                                </form>
                        </div>
                    </div>
                    {{review.id}}
                </div>
                 <Comments  :comment="comment" v-show="comment.id === comment.review_id? true:false" v-for="(comment, i) in comments" :key="i"/>
            </div>
            <a href="/reviews/create" style="background:yellow; width:100px; height:50px; border-radius:100%; float:right; z-index:999; right:0; position: absolute; bottom:0; text-align:center; font-size: 2em;" class="review-card__link">+</a>
        </div>
    </div>
</template>

<script >
import Axios from "axios";
import Comments from './Comments';

export default ({
    data() {
        return {
            reviewsTest: '',
            comments: '',
        };
    },
    mounted(){
        Axios.get('/api/cake-component/review')
            .then((response)=> this.reviewsTest = response.data)
            .catch((err)=> console.log(err));
        Axios.get('/api/cake-component/comments')
                    .then((resp)=> {
                        if(resp.data.length === 0){
                            this.comments = '';
                            console.log(this.comments);
                            return 0;
                        };
                        
                        this.comments = resp.data;
                        console.log(this.comments);
                        return 0
                        
                    })
                    .catch((err)=> console.log(err))
                    .catch((err)=> console.log(err));
             
    },
    methods: {
        remove(id){
           Axios.delete(`/api/reviews/${id}`, {
                id: id

           });       
        } 
    },
    components:{
        Comments
    }
});
</script>
