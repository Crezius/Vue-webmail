<template>

    <div id="liste_mail" class="liste_mail" @click="afficher_mail(msg.id)">
        <a id="listeMail"  href="#">
           {{msg.date}} <b>{{msg.expediteur}}</b> {{msg.message}}
        </a>
        <a id="croix" href="#" @click="supprimer(msg.id)">
            <span class="croixgauche"></span>
            <span class="croixdroite"></span>
        </a>
    </div>
    
</template>


<script>

    import axios    from 'axios';
    import Message_details from './Message_details.vue';


    export default {
    
        name: 'message',
        props: ['msg'],
        
        methods: {
            
            afficher_mail(id) {
            
                //const response = axios.get('http://127.0.0.1/DIP/vue_js/vue-webmail/src/method/get.php?id='+id);
                //this.messages = response.data;  
                //console.log(response.data);
                //   Message_details.prototype.$msg = this.message;
                this.$emit('click', this.msg)
            },
            
             supprimer(id) {
            
                const response = axios.get('http://127.0.0.1/DIP/vue_js/vue-webmail/src/method/supprimer.php?idSUP='+id);

                this.$emit('supprimer', this.msg.destinataire);

                           
            }
            
        }

    }

</script>


<style>

    .liste_mail {
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        align-items: center;
        background-color: #eee;
        box-shadow: 2px 3px 5px 0px #656565;
        padding: 0vh 1vh; 
        height: 10vh;
        margin-bottom: 2vh;
    }
    
    #listeMail{
        float:left;
        width: 15vw;
        text-decoration:none;
        color:black;
    }
    
    
    .croixgauche {
        transform: rotate(-45deg);
        transform-origin: 16px 4px;
    }

    .croixdroite {
        transform: rotate(45deg);
        transform-origin: 10px 3px;
    }
    
    .croixgauche,
    .croixdroite {
        position: relative;
        display: block;
        height: 4px;
        width: 20px;
        border-radius: 2px;
                background: red;

    }
    


</style>