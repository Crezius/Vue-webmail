<template>

    <form id="form_connexion" @click="connect()" method="post">
        <input type="text" name="user" maxlength="20"/>
        <input type="submit" value="Connexion">
    </form>
    
</template>



<script>

    export default {
    
        methods: {
        
            connect(){
                
                var formElement = document.getElementById("envoi");
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
            
        },
    
    }

</script>


<style>

        .gauche {
        float:left;
        width:30%;
        padding-left: 1vw;

    }

</style>