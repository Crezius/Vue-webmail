    
<template>
    <div class="gauche">
       <!-- <button id="le_fetch" @click="afficher_liste()" >FETCH</button> -->
        <ul>
           <template v-for="(message,key) in messages">
				<Message  :msg="message" @click="afficheMsg(message)" @supprimer="supprimer(key)"/> 	
			</template>	
        </ul>
    </div>
</template>



<script>

import Message  from './Message.vue'
import axios    from 'axios';

    export default {
                
        methods: {

            afficher_liste(){
                
            }
            
        },
        
        watch:{
            user(user){
                if(user!==""){
                    this.fetchMessages(user);
                }
            }
        
        },
        
        props: ['user'],
        data(){
            return {
                messages: [],
            }
        },
        
        computed: {
            async mmessages(){
                if(this.user === ""){
                    return [];
                } 
                
                
            }
        }, methods: {
            async fetchMessages(user){
                const response = await axios.get(`http://127.0.0.1/DIP/vue_js/vue-webmail/src/method/list.php?user=${this.user}`);
                this.messages = response.data; 
                console.log(user);
            }, 
            afficheMsg(msg){
                this.$emit('showMsg', msg);
            },
            supprimer(index){
                this.$delete(this.messages, index);
            }
        },
        
        components: {
            Message,
        }, 
            
    }

</script>




<style>

    #le_fetch {
        margin-bottom: 2vh;
    }


</style>