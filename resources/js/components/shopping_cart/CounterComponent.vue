<template>
     <a href="/carrito"> Mi carrito {{ productosCount }}</a>
</template>

<script>
    export default {
        props: ["count"],
        created(){
            window.store.commit("set", this.count)
        },
        computed: {
            productosCount(){
                return window.store.state.productosCount;
            }
        }
    }
</script>