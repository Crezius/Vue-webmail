
<style scoped src="@/assets/css/style.css">
</style>


<template>
    <div :style="{backgroundColor: currentColor}">
        <p> Mon Stroboscope</p>
        <button @click="strobos()" style="text-align: center">Start / Stop</button> 
        <button @click="reset()" style="text-align: center">Reset</button> 
    </div>
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
