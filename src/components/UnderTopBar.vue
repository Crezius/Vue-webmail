<template>
    <div class="top_bar">
        <Destinataire/>
        <Envoyer/>
    </div>
</template>

<script>


    import Destinataire from './Destinataire.vue'
    import Envoyer from './Envoyer.vue'

    export default {
    
        components:  {
            Destinataire,
            Envoyer,
        }
    
    }


</script>