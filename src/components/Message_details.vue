<template>

    <div id="zone_message_details">
        <h1>Coucou</h1>
       <!-- </br><p id='coucou'>Le : {{msg.date}}<br/>De : <b>{{msg.expediteur}}</b><br/>A : <b>{{msg.destinataire}}</b><br/><br/>{{msg.message}}</p>-->
    </div>

</template>


<script>

    export default {
    
        props: ['msg'],
            
        
    }

</script>


<style>

    #zone_message_details {
        display: block;
        position: absolute;
        bottom: 0;
        right: 0;
        margin: 2vh; 
        box-shadow: 2px 3px 5px 0px #656565;
        background-color: #aaa;
        width: 60vw;
        height: 80vh; 
    }

</style>


