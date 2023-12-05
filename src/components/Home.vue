<template>
     <div class="center-image">
      <img  alt= "nexius logo" src="https://media.licdn.com/dms/image/D4D0BAQHHSPFbgn7thg/company-logo_200_200/0/1685715599813/nexius_ai_logo?e=2147483647&v=beta&t=3v5aDimgPJkr1YKuVhZp-dzR2iD0ocgnHjkHXu2oTy4">
    </div>
    <div class="my-container">
      <h1>Lahore</h1>
     <!-- <About green = "thunders"/>-->
   <!-- <About name = "Lahore"/>-->
   <!-- <h1 v-if="show">if else condition</h1>-->
   <div class="d-flex ">
    <input class="my-input"  type="text" placeholder=" Enter your Name " v-model="name" />
    <input class="my-input" type="password" placeholder=" Enter your Password " v-model="password"/>
   
    
    
   <!-- <h1>Lahore</h1>-->
    <!--<button v-on:click="test()">clickme</button>-->
     <!-- <button class="my-field" v-on:click="getdata " type="button">Submit</button> -->
    
     <button class="my-field" @click="submitForm">Submit</button>
   </div>

     </div>
     <h1>Developer</h1>
     <label>Laravel</label>
     <input type="checkbox" value="Laravel" v-model="technology" id="Laravel"   /><br><br>

     <label>Python</label>
     <input type="checkbox" value="Python" v-model="technology" id="Python"  /><br><br>

     <label>Nodejs</label>
     <input type="checkbox" value="Nodejs" v-model="technology" id="Nodejs"  /><br><br>

     <label>Reactjs</label>
     <input type="checkbox" value="Reactjs" v-model="technology" id="Reactjs"  />
   <h3>Selected Technology : {{ technology }}</h3>
   <h1>{{ getresult }}</h1>
   
    <!-- <About><a href="#">code</a></About> -->

    
    <!--<input type="text" v-model="count"/>-->
   </template>
<script>
// import About from './About.vue'

import axios from 'axios';



export default{
 name: 'HomeSection',
 components: {
 },
 data(){
  return{
    name:null,
    password:null,
    technology: [],
    dollar:100,
    rupess:100,
    discount:25,
   // show:false,
  }
 },
 methods: {
    test() {
        alert('function called');
    },
    getdata() {
      
        console.log("values:", this.name, this.password);
        
    },
    submitForm() {
     const dataToSend= {
        name: this.name,
        password: this.password,
        technology: this.technology,
      }
      console.log("data to send ====", dataToSend);
      axios
        .post("http://127.0.0.1:8000/api/submit-form", dataToSend)
        .then((response) => {
          console.log("Data sent successfully", response.data);
        })
        .catch((error) => {
          console.error("Error occurred", error);
        });
      }
    },

  /*computed: {
    getresult(){
      return this.dollar*this.rupess-this.discount;
    }
  }*/
}


</script>
<style>
.container {
  position: relative;
  height: 100vh; /* Set the container height to the full viewport height */
}
.center-image {
  text-align: center;
  height: 100px;
  
}
h1{
    color:rgb(9, 9, 10);
    font-family:'Times New Roman';
}
h2{
    color:rgb(14, 12, 15)
}
input type1{
color: blue;
}
h4{
  color: black;
}

.my-container{
  text-align: center;
}
.my-input{
  padding: 8px 12px;
  margin-bottom: 15px;
  
  margin-bottom: 15px;
    background-color: #51867d29;
    border: 3px solid black;
    border-radius:6px;
    
  
}
.d-flex{
  display: flex;
    align-items: center;
    flex-direction: column;
}
.my-container h1{
  margin-top: 40px;
}
.my-field{
  padding: 20px,15px;
  background-color:rgb(177, 177, 177);
  border:3px solid rgb(0, 0, 0);
  border-radius:6px;
  
}
Label{
  color:blue;
}
ul.custom-ul {
  
  padding: 5px;
  background-color: #dad0d0;
  border: 1px solid;
  text-align: center;
}
.custom-ul a{
  font-weight: bold;
  padding: 6px 15px;
  color: black;
  text-decoration: none;
}



  

  




</style>