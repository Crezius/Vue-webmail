<template>
    
    <div id="select_destinataire">
        <h3>Destinataire : </h3>
        <form id="form_destinataire" method="get">
            <input id="txt_destinataire" type="text" name="user" maxlength="20"/>
        </form>
    </div>
    
</template>



<script>

    export default {

    
    }

</script>


<style>

    #select_destinataire {
        display: flex;
        flex_direction: row;
        align-items: center;
        justify-content: space-around;
        width: 30%;
    }
    
    #form_destinataire {
        width: 70%;  
    }
    
    #txt_destinataire {
        width: 100%;  
    }
    

</style>