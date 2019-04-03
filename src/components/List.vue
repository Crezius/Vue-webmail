    
<template>
    <div class="gauche">
       <!-- <button id="le_fetch" @click="afficher_liste()" >FETCH</button> -->
        <ul>
            <Message v-for="mon_message in messages" v-bind:key="mon_message.id" :msg="mon_message"/>

        </ul>
    </div>
</template>


<?php Allow-Control-Allow-Origin: * ?>

<script>

import Message  from './Message.vue'
import axios    from 'axios';

    export default {
        
        data() {
            return {
                
                messages: [],
                
            }
        }, methods: {

            
        }, components: {
            Message,
        }, async mounted(){
            /*const response = await axios.get('https://jsonplaceholder.typicode.com/todos');
            this.messages = response.data;
            
*/

            try {
            
            
                const response = await axios.get('http://127.0.0.1/DIP/vue_js/vue-webmail/src/method/list.php?user=test2');
                this.messages = response.data;  
                console.log(response.data);


            } catch (error) {
                console.error(error);
            }
                    
        },
        
            
    }

</script>




<style>

    #le_fetch {
        margin-bottom: 2vh;
    }


</style>