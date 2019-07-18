<template>
    <div class="row justify-content-center reviews-container">
        <div class="col-md-8 reviews-container__content">
            <div class="card reviews-container__content__review-card">
                <div class="card-header reviews-card__header">user review</div>
                <div class="card-body reviews-card__body">
                        <div class="card reviews-card__single-review__wrapper" v-for="review in reviewsTest" v-bind:key="review.id" v:bind:id="review.id">
                            <div class="card-body reviews-card__single-review">
                                    {{ review.reviews }}
                                    
                                    <a  class="review-card__single-review_add-comment" style="float:right;  color:blue;  margin-left:10px;" href="/review/comments">🗨</a>
                                    <a class="review-card__single-review_edit-review" style="float:right;  color:blue;  margin-left:10px;" href="/review/edit" >🖉</a>
                                    <form  class="review-card__single-review_remove-review" style="float:right;  color:blue;  margin-left:10px;" :action="action" @submit="remove"  method="POST">
                                           <input type="hidden" name="_token" :value="csrf">
                                           <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" style="color:teal; background:none; border:none; " >⨯</button>
                                    </form>
                            </div>
                        </div>
                </div>
            </div>
            <a href="/review/create" style="background:yellow; width:100px; height:50px; border-radius:100%; float:right; z-index:999; right:0; position: absolute; bottom:0; text-align:center; font-size: 2em;" class="review-card__link">+</a>
        </div>
    </div>
</template>

<script >
import Axios from "axios";

   
    export default ({
        data() {
            return {
            reviewsTest: ['test', 'test2'],
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            id: '',
            action: `review/${this.id}`
            };
        },
        
        mounted(){
            Axios.get('/api/cake-component/review')
                .then((response)=> this.reviewsTest = response.data)
                .then((resp)=> console.log(resp))
                .catch((err)=> console.log(err));  
            },


        methods: {
                remove(){
                    Axios.delete(`/review/1`, this.data);
                }
        }

    });
</script>
