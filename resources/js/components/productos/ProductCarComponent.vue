<template>
    <div class="card">
        <div class="card-header"> 
            {{ producto.title }}
        </div>
        <div class="card-body">
            {{ producto.price }}
            {{ producto.description }}
        </div>
    </div>
</template>

<script>
    export default {
        props:{
            producto:{
                type: Object
            }
        } 
    }
</script>