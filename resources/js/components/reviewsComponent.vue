<template>
    <div class="row justify-content-center reviews-container">
        <div class="col-md-8 reviews-container__content">
            <div class="card reviews-container__content__review-card">
                <div class="card-header reviews-card__header">user review</div>
                <div class="card-body reviews-card__body">
                        <div class="card reviews-card__single-review__wrapper" v-for="review in reviewsChange" v-bind:key="review">
                            <div class="card-body reviews-card__single-review">
                                    {{ review }}
                                    <a  class="review-card__single-review_add-comment" style="float:right;  color:blue;  margin-left:10px;" :href="review.id">🗨</a>
                                    <a class="review-card__single-review_edit-review" style="float:right;  color:blue;  margin-left:10px;" :href="review.id" >🖉</a>
                                    <form v-if="authorised" class="review-card__single-review_remove-review" style="float:right;  color:blue;  margin-left:10px;" action="review" method="POST">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" style="color:teal; background:none; border:none; " value="">⨯</button>
                                    </form>
                            </div>
                        
                        </div>
                </div>
            </div>
            <a href="review/create" style="background:yellow; width:100px; height:50px; border-radius:100%; float:right; z-index:999; right:0; position: absolute; bottom:0; text-align:center; font-size: 2em;" class="review-card__link">+</a>
        </div>
    </div>
</template>

<script >
    export default ({
        data() {
            return {
                reviews: ['test', 'test2'],
                authorised: true
            };
        },
        computed: {
            reviewsChange(){
                return this.reviews = Array(Math.round(Math.random())).fill( Math.random().toString(36).substring(2, 15) + Math.random().toString(36).substring(2, 15));
            }
        },

        

    });
</script>
