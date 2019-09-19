<template>
    <div class="row justify-content-center reviews-container">
        <div class="col-md-8 reviews-container__content">
            <div class="card reviews-container__content__review-card">
                <div class="card-header reviews-card__header">user review</div>
                <Reviews :reviews="review" v-for="(review, i) in this.$store.state.reviewsList" :key="i" :review-id="review.id"/>
            </div>
            <router-link class="review__router-link" to="/reviews/create">+</router-link>
        </div>
    </div>
</template>
<script >
import  Reviews  from "./Reviews";
export default ({
    mounted(){

        this.$store.commit('fetchReview');
      
    },
    components: {
        Reviews
    }
});

</script>
