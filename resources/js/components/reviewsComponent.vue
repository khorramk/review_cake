<template>
    <div class="row justify-content-center reviews-container">
        <div class="col-md-8 reviews-container__content">
            <div class="card reviews-container__content__review-card">
                <div class="card-header reviews-card__header">user review</div>
                <Reviews :reviews="review" v-for="(review, i) in reviewsTest" :key="i" :review-id="review.id"/>
            </div>
            <router-link to="/reviews/create">+</router-link>
        </div>
    </div>
</template>
<script >
import  Reviews  from "./Reviews";
export default ({
    data() {
        return {
            comments: '',
            reviewsTest: ''
        };
    },
    mounted(){
        axios.get('/api/cake-component/review')
            .then((response)=> this.reviewsTest = response.data)
            .catch((err)=> console.log(err));     
    },
    components: {
        Reviews
    }
});

</script>
