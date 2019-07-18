<template>
    <div>
        <div class="col border border-primary comments-card_single-comments__wrapper" >
            <div class="card-body comment-card__single-card" v-for="comment in getRandomComments" v-bind:key="comment">
                {{ comment }}
                <a class="review-card__single-review_edit-comment" style="float:right;" href="comment/edit">🖉</a>
                <form  class="review-card__single-review_remove-comment" style="float:right;" action="comment.id" method="POST" v-show="notVerified">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="submit" style="color:teal; background:none; border:none; padding-right:30px;" value="⨯">

                </form>
            </div>
        </div>
    </div>
   
                        
                   
                
</template>

<script>
    export default {
        data: {
            
            comments: [],
            authorised: true
        
        },

        computed: {
            getRandomComments(){
                return this.comments = Array(Math.random() * 5).fill( Math.random().toString(36).substring(2, 15) + Math.random().toString(36).substring(2, 15))
            }
        },

        method: {
            
            notVerified(){
                 return this.authorised = false
            }
        },

        props: ['verified']
        
    }
</script>

<style lang="scss" scoped>

</style>