<template>
<b-list-group-item :variant="variant">
    <b-row class="p-2 h-100" align-h="center">
        <b-col cols="12" md="3" class="text-center">
            <b-img rounded="circle" blank width="50" height="50" blank-color="#777" alt="img" class="m1" />
        </b-col> 
        <b-col cols="6" align-self="center" class="d-none  d-md-block">
            <p class="mb-1">{{ name }}</p>
            <p class="text-muted small mb-1">{{ lastMessage }}</p>
        </b-col> 
         <b-col cols="3" class="d-none d-md-block">
            <p class="text-muted small">{{ lastTime }}</p>
        </b-col> 
    </b-row>
</b-list-group-item>
</template>

<script>
    export default {
        props:[
            'variant'
        ],
        data(){
            return {
                name: 'Emmanuel F',
                lastMessage: 'Hasta Luego',
                lastTime: '1:37 pm'
            };
        },
        mounted() {
            console.log('Componente ContactComponent montado correctamente.')
        }
    }
</script>
