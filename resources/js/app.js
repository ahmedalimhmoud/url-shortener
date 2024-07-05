import './bootstrap';
import { createApp } from 'vue';
import UrlShortenerForm from './components/UrlShortenerForm.vue';

createApp({
  components: {
    UrlShortenerForm
  }
}).mount('#app');
