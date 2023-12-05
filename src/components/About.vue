 <template>
    <h1  :class="applyStyle" >Thunders</h1>
    <button class v-on:click="colorful=!colorful">ApplyStyle</button>
    <slot></slot>
</template>
<script>




export default{
name:'About-section',
data(){
    return{
        colorful:true,
    }
},
computed:{
    applyStyle(){
       return{
        green: this.colorful,
        rrr:true,
       }
    
    }
},
props:{
    name: String,
  
}
}
</script>
<style>
.green{
    background-color:red;
    width:600px;

}
.rrr{
    color:yellow;
}
</style> 