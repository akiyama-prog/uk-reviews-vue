<template>
    <div class="container">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">index</div>

                <div class="card-body">
                    I'm an example index.
                </div>
                <router-link to="{name:'restaurant-index'}">新規投稿</router-link>
                <router-view></router-view>
            </div>
        </div>
    </div>
</template>
    
<script>
export default {};
</script>
