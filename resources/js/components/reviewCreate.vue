<template>
    <div>
        <form action="/cake-component/review"  method="POST" class="create-form-reviews" style="display:flex; flex-direction:column;" >
            <input type="hidden" name="_csrf" v-bind:value="authorise">
            <label for="review_creation">write your reviews</label>
            <textarea name="review_creation" id="" cols="30" rows="10" v-model="review"></textarea>
            <input type="submit" value="add your comments">
        </form>
    </div>
</template>

<script>
    import reviewsComponent from './reviewsComponent';
    export default {
        data(){
            return {
                reviews: [],
                authorise: true,
                review: ''
            }
        }
        
    }
</script>

<style lang="scss" scoped>

</style>