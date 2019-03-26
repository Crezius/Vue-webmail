    
<template>
    <div class="gauche">
        <button id="le_fetch" @click="afficher_liste()" >FETCH</button>
        <Message v-for="mon_message in messages" :msg="mon_message"/>
    </div>
</template>




<script>

import Message from './Message.vue'

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
        }
            
    }

</script>




<style>

    #le_fetch {
        margin-bottom: 2vh;
    }


</style>