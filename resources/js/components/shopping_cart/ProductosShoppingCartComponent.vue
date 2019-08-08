<template>
   <div class="col-md-12">
    <material-transition-group tag="div"  >
                                     
        <article class="card-producto" v-for="(producto, index)  in productos" :data-index="index" :key="producto.id" v-bind:producto="producto" >
            <div class="row col-md-12">
                <div class="col-md-8">
                    <strong>{{ producto.title }}</strong>
                </div>
                <div class="col-md-4">
                    <strong>{{ producto.humanPrice }}</strong>
                </div>
            </div>
        </article>
                      
    </material-transition-group>
    
        <article class="total card-producto">
             <div class="row col-md-12">
                <div class="col-md-6">
                    <strong>TOTAL:</strong>
                </div>
                <div class="col-md-6">
                    <strong>{{ total }}</strong>
                </div>
            </div>
        </article> 
    </div>
</template>

<script>
    export default {
        data(){
            return {
                endpoint: '/carrito/productos',
                productos: []
            }
        },
        created(){
            this.fetchProductos();
        },
        computed: {
            total(){
                let cents = this.productos.reduce((acumulador,currentObj)=>{
                    return acumulador + currentObj.numberPrice
                },0);

                return `$${cents/100}`;
            }
        },
        methods: {
            fetchProductos(){
                axios.get('/carrito/productos').then(res => {
                    //console.log(res );
                    this.productos = res.data.data;
                })
            }
        }

    }
</script>