<template>
    
    <div id="select_destinataire">
        
    </div>
    
</template>



<script>

    export default {

        data() {
            return {
                destinataire: "",
            };
        },
        watch: {
            destinataire(destinataire){
                $emit('mondestinataire', this.destinataire);
            }
        }
    
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