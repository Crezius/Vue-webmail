    
<template>
    <div class="gauche">
        <button id="le_fetch" @click="afficher_liste()" >FETCH</button>
        <ul>
            <Message v-for="mon_message in messages" v-bind:key="mon_message.id" :msg="mon_message"/>

        </ul>
    </div>
</template>




<script>

import Message  from './Message.vue'
import axios    from 'axios';

    export default {
        
        data() {
            return {
                
                messages: [],
                
            }
        }, methods: {
        
            afficher_liste() {
            
               this.messages.push({ id: 1, message: 'My journey with Vue', date: '19/08/1998', expediteur : 'Michel' });
                this.messages.push({ id: 2, message: 'Blogging with Vue', date: '23/02/1963', expediteur : 'Patrick' });
                this.messages.push({ id: 3, message: 'Why Vue is so fun', date: '01/10/2001', expediteur : 'Sandrine' });                
                this.$emit("afficherMail");
                
                
            }
        }, components: {
            Message,
        }, async mounted(){
            /*const response = await axios.get('https://jsonplaceholder.typicode.com/todos');
            this.messages = response.data;*/

           /* try {
                const response = false;// = axios.get('./method/list.php');
                this.messages = response.data;  

            } catch (error) {
                console.error(error);
            }*/
                    
        },
        
            
    }

</script>




<style>

    #le_fetch {
        margin-bottom: 2vh;
    }


</style>