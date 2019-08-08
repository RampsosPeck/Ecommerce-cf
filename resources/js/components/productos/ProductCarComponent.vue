<template>
    <div class="col-md-12">
        <div class="actions card ">
            <div class="card-header bg-info "> 
                <a :href="'/productos/'+ producto.id ">
                    {{ producto.title }}
                </a>
            </div>
            <div class="card-body">
                {{ producto.humanPrice }}
                {{ producto.description }}
            </div>
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