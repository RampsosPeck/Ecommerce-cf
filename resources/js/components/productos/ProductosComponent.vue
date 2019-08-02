<template>
    <div class="container">
        <material-transition-group tag="div"  class="row justify-content-center">
                                     
                <productos-car-component v-for="(producto, index)  in productos" :data-index="index" :key="producto.id" v-bind:producto="producto" >
                </productos-car-component>
                                
        </material-transition-group>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                name: 'Productos Component',
                productos:[],
                endpoint: "/productos"
            }
        }, 
        created(){
            this.fetchProductos();
        },
        methods: {
            fetchProductos(){
                axios.get(this.endpoint).then((res)=>{
                    this.productos = res.data.data;
                    console.log( res.data.data);
                });
            } 
            
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>