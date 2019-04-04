<template>

    <!--<form id="form_envoyer" @submit="envoyer()" method="get">
        <input id="txt_message" type="text" name="user" maxlength="20"/>
        <input type="submit" value="Envoyer">
    </form>-->
    
    <div class="block_envoyer">
        
        <div class="block_destinataire">
            <h3>Destinataire : </h3>
            <form id="form_destinataire" method="get">
                <input id="txt_destinataire" type="text" v-model="destinataire" name="user" maxlength="20"/>
            </form>
        </div>
        
        <div class="block_message">
            <input id="txt_message" type="text" name="user" maxlength="20" v-model="message"/>
            <button @click="envoyer" value="Envoyer">Envoyer</button>
        </div>
        
    </div>
    
</template>



<script>

    export default {
    
        props: ['destinataire'],

    
        data() {
            return {
                message: "",
            };
        },
    
        methods: {
            
            envoyer(){
            
                var formElement = document.getElementById("form_envoyer");
                var formData = new FormData(formElement);
                formData.set("user", "sdf");

            
                axios({
                    method: 'POST',
                    url: 'http://127.0.0.1/DIP/vue_js/vue-webmail/src/method/ajouter.php',
                    data: formData,
                    headers: {
                        'Authorization': 'Basic Y2xpZW50OnNlY3JldA==',
                        'Content-Type': 'application/x-www-form-urlencoded'
                    }
                })
                .then(function(response){
                    console.log(response.data);
                    console.log(response.status);
                })
                .catch(function(error){
                    console.log(error);
                });
            
                return false;
            },
            
        }
    
    }

</script>


<style>

    .block_envoyer {
        width: 90%;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
    }
    
    .block_destinataire, .block_message {
        display: flex;
        flex-direction: row;
        align-items: center;
    }
    
    .block_message {
        width: 50%;
    }
    
    #txt_message {
     width: 80%;
    }

</style>