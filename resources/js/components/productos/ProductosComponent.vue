<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div  v-for="producto in productos">
                    
                <productos-car-component v-bind:producto="producto" >
                </productos-car-component>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                name: 'Productos Component',
                productos:[
                    {title: 'Curso de Ruby', price: 200, description: 'Hola mundo'},
                    {title: 'Curso de Laravel', price: 200, description: 'Hola memes'}
                ]
            }
        }, 
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>