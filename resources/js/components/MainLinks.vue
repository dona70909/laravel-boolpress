<template>
    <div class="row">
        <router-link :to="{ name: 'about'}">
            <h1 class="fw-bolder fs-1">About us</h1>  
        </router-link>

        <router-link :to="{ name: 'posts'}">
            <h1 class="fw-bolder fs-1">Posts</h1>  
        </router-link>
    </div>
</template>


<script>

/* import Posts from '../components/Posts.vue';
import Post from './Post.vue'; */


export default {
    name: "MainLinks",
    components: {
    
    }
}
</script>

<style scoped>
</style>