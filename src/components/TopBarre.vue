<template>
    <div class="top_bar">
        <h1 id="id_user">Caramail 2 : {{user}}</h1>
        <Connect @connect="changeUser"/>
    </div>
</template>


<script>

    import Connect from './Connect.vue'

    export default {

        components: {
            Connect,
        }, methods: {
            changeUser(user){
                console.log(user);
                this.user = user;
                this.$emit('changeUser', user);
            }
        },
        data() {
            return {
                user: "",
            };
        }
    };

</script>


<style>

    .top_bar {
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        align-items: center;
        text-align:center;
        height: 5vh;
        background-color: #ff000066;
        box-shadow: 2px 3px 5px 0px #656565;
        padding-top:0.5%;
        padding-bottom:0.5%;
        margin-bottom:2vh;
    }

</style>