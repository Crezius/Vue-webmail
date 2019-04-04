

<template>
    
    <div>
        <TopBarre @changeUser="changeUser"/>
        <UnderTopBar/>
        <List :user="user" @showMsg="afficheMsg"/>
        <Message :msg="msg"/>
    </div>
    
</template>


<script>

    import TopBarre from './components/TopBarre.vue';
    import List     from './components/List.vue'
    import UnderTopBar  from './components/UnderTopBar.vue'
    import Message  from './components/Message_details.vue'

    export default {
    
      name: 'App',
      components: {
        TopBarre,
        List,
        UnderTopBar,
        Message,
      },
      
       data(){
            return {
                user: "",
                msg: {},
            };
        },
        methods: {
            changeUser(user){
                this.user= user;
            },
            afficheMsg(msg){
                this.msg= msg;
                
            }
        }
        
    };



</script>

<style>



</style>



















<!--<body>
    
    
        <div class="block header">
            <h1>Webmail</h1>
            <div>
                <input type="texte" class="input-text" value="coucou">
            <div>
        </div>
        
        <div class="block ajout">
                <input type="texte" value="coucou">
        </div>
    
        <div class="strobo" :style="{backgroundColor: currentColor}">

            
            <p> Mon Stroboscope</p>
            <button @click="strobos()" style="text-align: center">Start / Stop</button> 
            <button @click="reset()" style="text-align: center">Reset</button> 
        </div>
        
    
    
    <div id="Connexion" class="block">
            <h1 id="id_user">Caramail 2 </h1>

            <form id="form_connexion" onsubmit="return connexion('')" method="get">
				<input type="text" name="user" maxlength="20"/>
				<input type="submit" value="Connexion">
			</form>
        </div>
		
		<div id="creation_mail" class="block">
			<form id="envoi">
				<div id="_Destinataire" class="block">
					<label for="dest">Destinataire:  </label>
					<input type="text" id="dest" name="dest" style="width:100%" maxlength="20"/>
				</div>
				<div id="_Message" class="block">
					<label for="message">Message:  </label>
					<input type="text" id="message" name="message"  style="width:100%" maxlength="300"/>
					<input type="submit" value="Envoyer"  id="btnEnvoyer">
				</div>
			</form>
        </div>
        
        
		
		<div>
           
				<liste/>

		</div>
        
        
    
        
		<div id="droite" class="block">
		  Coucou
		</div>
    
    </body>-->
