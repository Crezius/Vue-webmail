<template>

    
    <div>
        <input type="text" name="user" maxlength="20" v-model="user"/>
        <button @click="connect" value="Connexion">Connexion</button>
    </div>
    
</template>



<script>

    export default {
    
    
        methods: {
        
            connect(){
                
                this.$emit('connect', this.user);
                console.log(this.user);
            
            },
            
        },
        
        data() {
            return {
                user: "",
            };
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