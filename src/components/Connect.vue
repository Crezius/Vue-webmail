<template>

    <form id="form_connexion" @submit="connect()" method="get">
        <input type="text" name="user" maxlength="20"/>
        <input type="submit" value="Connexion">
    </form>
    
</template>



<script>

    export default {
    
        methods: {
        
            
            
            connect(){
            
            return false;
            },
            
        }
    
    }

</script>


<style>

        .gauche {
        float:left;
        width:30%;
        padding-left: 1vw;

    }

</style>