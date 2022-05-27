<template>
    <div class="container-fluid">
        <div class="row d-flex justify-content-center gx-3 gy-3">
            <!-- //# FOR of all the obtained from the backend through the api routes (method index) -->
            <Post v-for="(post, index) in posts" :key="index" :post="post" />
        </div>
    </div>
</template>

<script>

import Post from '../components/Post.vue'; 

    export default {

        name:'Posts',

        components: {
            Post,
        },

        data: function() {
            return {
                posts:[],
            }
        },
        
        mounted() {
            console.log('Component mounted.')
        },
    

        methods: {
            getPosts(){
                axios.get("http://localhost:8000/api/posts")
                
                .then((result)=>{
                    this.posts = result.data;
                    console.warn(this.posts);
                })
                .catch( (error) => {
                    console.warn(error);
                });
            },
        },

        created() {
            this.getPosts()
        },
        
        
    }
</script>
