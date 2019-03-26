<template>

    <div>
        </br><p id='coucou'>Le : {{msg.date}}<br/>De : <b>{{msg.expediteur}}</b><br/>A : <b>{{msg.destinataire}}</b><br/><br/>{{msg.message}}</p>
    </div>

</template>


<script>

    export default {
    
        props: ['msg'],
            
        
    }

</script>