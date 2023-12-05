<template>
    <div class="setting">
     <form class="dor">
        <input class="my-input"  type="text" placeholder=" Enter your Name " v-model="name" />
        <input class="my-input" type=" mobile_number" placeholder=" Enter your Mobile Number " v-model="mobile_number"/>
        <input class="my-input"  type="text" placeholder=" Enter your Address " v-model="address" />
        <button class="my-field" v-on:click="submitForm" type="button">Submit</button>
     </form>   
    </div>
    </template>
    <script>
    import axios from 'axios';
    export default{
          name:'Client-section',
        data(){
            return{
            name:null,
            mobile_number:null,
           address:null,
        }
    },
    methods:{

      submitForm() {
       const dataToSend= {
          name: this.name,
          mobile: this.mobile_number,
          address: this.address,
        }
        console.log("data to send ====", dataToSend);
        axios
          .post("http://127.0.0.1:8000/api/client", dataToSend)
          .then((response) => {
            console.log("Data sent successfully", response.data);
          })
          .catch((error) => {
            console.error("Error occurred", error);
          });
        }

    }
      

      
    }
    </script>
    <style>
    .setting{
    position: relative;
  height: 100vh;
}
.dor{
    display: flex;
    align-items: center;
    flex-direction: column;
}
</style>