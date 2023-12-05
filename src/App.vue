<template>
  <!-- <img  alt="Vue logo" src="./assets/logo.png"> -->
  <div>
    <nav>
      <ul class="custom-ul">
         <router-link to="/">Home</router-link>
         &nbsp;
         <router-link to="/student">Student</router-link>
         &nbsp;
         <router-link to="/client">Client</router-link>
         &nbsp;
        <router-link to="/about">About</router-link>
  </ul>
  

     <router-view/> 
     </nav>
  </div>
 
  <!-- <Home /> -->
</template>

<script>
// import Home from "./components/Home.vue"

export default {
    name: 'App',
  components: {
    
    
    // Home,
  }
}
</script>

