<template>


    <li>
        {{msg.id}} {{msg.title}}
    </li>
    
    <!--<div id="liste_mail" class="liste_mail">
        <a id="listeMail"  href="#">
           {{msg.date}} <b>{{msg.expediteur}}</b> {{msg.message}}
        </a>
        <a id="croix" href="#">
            <span class="croixgauche"></span>
            <span class="croixdroite"></span>
        </a>
    </div>-->
    
</template>


<script>

    export default {
    
    
        name: 'message',
        props: ['msg'],
        
        methods: {
            
        }

        
    }

</script>


<style>

    .liste_mail {
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        align-items: center;
        background-color: #eee;
        box-shadow: 2px 3px 5px 0px #656565;
        padding: 0vh 1vh; 
        height: 10vh;
        margin-bottom: 2vh;
    }
    
    #listeMail{
        float:left;
        width: 15vw;
        text-decoration:none;
        color:black;
    }
    
    
    .croixgauche {
        transform: rotate(-45deg);
        transform-origin: 16px 4px;
    }

    .croixdroite {
        transform: rotate(45deg);
        transform-origin: 10px 3px;
    }
    
    .croixgauche,
    .croixdroite {
        position: relative;
        display: block;
        height: 4px;
        width: 20px;
        border-radius: 2px;
                background: red;

    }
    


</style>