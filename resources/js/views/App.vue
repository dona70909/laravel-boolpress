<template>
    <div class="container-fluid">
        <Posts/>
    </div>
</template>

<script>
// import axios from 'axios';
import Posts from '../components/Posts.vue'; 
export default {
    name: "App",
    components: {
        Posts,
    }
}
</script>

<style scoped>
</style>