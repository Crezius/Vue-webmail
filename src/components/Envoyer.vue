<template>

    <form id="form_envoyer" @submit="envoyer()" method="get">
        <input id="txt_message" type="text" name="user" maxlength="20"/>
        <input type="submit" value="Envoyer">
    </form>
    
</template>



<script>

    export default {
    
        methods: {
        
            
            
            envoyer(){
            
            return false;
            },
            
        }
    
    }

</script>


<style>

    #form_envoyer {
        width: 50%; 
    }
    
    #txt_message {
        width: 85%; 
    }

</style>