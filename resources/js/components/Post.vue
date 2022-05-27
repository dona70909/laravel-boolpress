<template>
    <div class="col-3">
        <!-- //# component single post -->
        <div class="card">
            <img class="card-img-top img-fluid py-2" :src="post.post_img" alt="This image should represent:post.post_title">
            <div class="card-body">
                <h5 class="card-title">{{post.post_title}}</h5>
                <h6>{{post.category}}</h6> 
            </div>
        </div>
    </div>
</template>

<script>

    export default {

        name:"Post",

        mounted() {
            console.log('Component mounted.')
        },

        props: ["post"],
    
    }
</script>

<style lang="scss" scoped>

    .card {
        height: 250px;
    }

</style>