<template>
    <b-row class="h-100">
        <b-col cols="8">
            <b-card class="h-100"
                footer-bg-variant="dark"
                footer-border-variant="dark"
                title="Conversacion activa">

              <b-media vertical-align="center">
                <template v-slot:aside>
                <b-img rounded="circle" blank blank-color="#ccc" width="65" alt="placeholder"></b-img>
                </template>
                <b-card>
                <p class="mb-0">
                 Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                C.
                </p>
                </b-card>
              </b-media>

              <b-media right-align vertical-align="center">
                <template v-slot:aside>
                <b-img  rounded="circle" blank blank-color="#ccc" width="65" alt="placeholder"></b-img>
                </template>
                <b-card>
                <p class="mb-0">
                 Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                Cras purus odio.
                </p>
                </b-card>
              </b-media>
            
            <div slot="footer">
                <b-form class="mb-0">
                    <b-input-group>
                    <b-form-input class="text-center"
                        type="text"
                        placeholder="Ingrese texto y presione Enter para enviar">
                    </b-form-input>
                    <b-input-group-append>
                    <b-button variant="secondary">Enviar</b-button>
                    </b-input-group-append>
                    </b-input-group>
                </b-form>
                   
            </div>
            </b-card>
        </b-col>
                
        <b-col cols="4">
            <b-img rounded="circle" blank width="60" height="60" blank-color="#777" alt="img" class="m1" />
            <p>Usuario Seleccionado</p>
            <hr>
            <b-form-checkbox>
                Desactivar notificaciones
            </b-form-checkbox>
        </b-col>
    </b-row>
</template>

<script>
export default {
    data(){
        return{

        };
    },
    mounted(){
        console.log('Componente ActiveConversationComponent cargado con exito')
    }
}
</script>