import { createApp } from 'vue';
import App from './App.vue';
import router from './composables/router';

createApp(App).use(router).mount('#app');
