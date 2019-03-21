
<style scoped src="@/assets/css/style.css">
</style>

<template>

    <body>
    
    <!--
        <div class="block header">
            <h1>Webmail</h1>
            <div>
                <input type="texte" class="input-text" value="coucou">
            <div>
        </div>
        
        <div class="block ajout">
                <input type="texte" value="coucou">
        </div>
    <!--
        <div class="strobo" :style="{backgroundColor: currentColor}">

            
            <p> Mon Stroboscope</p>
            <button @click="strobos()" style="text-align: center">Start / Stop</button> 
            <button @click="reset()" style="text-align: center">Reset</button> 
        </div>
        
    -->
    
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
		
		

		<div id="gauche" class="block">
            <input type="submit" value="FLETCH" id="fletch">

			<ul id="_liste_mail">
				
			</ul>
		</div>
		<div id="droite" class="block">
		  Coucou
		</div>
    
    </body>
</template>




<script>
    import HelloWorld from './components/HelloWorld.vue';
    

    export default {
    
      name: 'app',
      components: {
        HelloWorld,
      },
      
      data(){
            return{
            
                i: 0,
                currentColor: ``,
                bgColor: [
                    `red`,
                    `yellow`,
                    `green`,
                    `blue`,
                ],
                timer: null,
                stop: true,
                    
            }
        },
        
        methods:{
            strobos() {
                
                this.start();
            
                if(!this.stop){
                    this.timer = setInterval(this.changeColor, 20);
                } else {
                    clearInterval(this.timer);
                }
                
            },
            
            start(){
                this.stop = !this.stop;
            },
            
            changeColor() {
                this.currentColor = this.bgColor[this.i++%this.bgColor.length];
            },
            
            reset() {
                this.stop = true;
                clearInterval(this.timer);
                this.currentColor = `white`
            },
            
             supprimer(id, id_liste){

                xhr = new XMLHttpRequest();
				xhr.open('DELETE', 'supprimer.php?idSUP=' + id);
				xhr.send(null);

                
                var list_mail = document.getElementById("_liste_mail");
                list_mail.removeChild(document.getElementById("liste_mail"+id_liste));
                
                return false;
			}
        }
        
    };



</script>

<style>

    div {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
    }

</style>
