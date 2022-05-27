<template>
    <section class="container-fluid">
        <div class="row p-3 justify-content-center">
            <!-- //# example info inside guest page  -->
            <div class="card text-center col-6">
                <div class="card-header">
                    About us 
                </div>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                </div>
                <div class="card-footer text-muted">
                    2 days ago
                </div>
            </div>
        </div>
    </section>
</template>


<script>

    export default {

        name:"AboutUs",

        mounted() {
            console.log('Component mounted.')
        },
    
    }
</script>