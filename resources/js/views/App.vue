<template>
    <div class="container-fluid">
        <!--    <Posts/>
        <router-view></router-view> -->
        <MainLinks />
        <MainContent />
    </div>
</template>

<script>
// import axios from 'axios';
//import Posts from '../components/Posts.vue';
import MainLinks from '../components/MainLinks.vue';
import MainContent from '../components/MainContent.vue';

export default {
    name: "App",
    components: {
        MainLinks,
        MainContent,
    }
}
</script>

<style scoped>
</style>