<template>
    <button @click="addToCart" class="btn btn-primary"> {{ message }}</button>
</template>

<script>
    export default {
        data(){
            return {
                message: 'Agregar al carrito',
                endpoint: '/in_shopping_carts'
            }
        },
        props: {
            producto: {
                type:Object
            }
        },
        methods: {
            /*
            addToCart(){
                axios.post(this.endpoint).then((res)=>{
                    this.producto.id 
                    console.log( res.data.data);
                });
            }*/

            addToCart(){
                axios({
                    method: 'POST',
                    url: this.endpoint,
                    data:{
                        producto_id: this.producto.id
                    },
                    headers:{
                        'Accept':'application/json',
                        'Content-Type': 'application/json'
                    }
                }).then(()=>{
                    window.store.commit("increment");
                })
            }

        }
    }
</script>