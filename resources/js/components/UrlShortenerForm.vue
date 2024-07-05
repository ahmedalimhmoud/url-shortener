<template>
    <div>
      <form @submit.prevent="submitUrl">
        <div class="form-group">
          <input type="url" v-model="url" placeholder="Enter URL" required>
        </div>
        <div class="form-group">
          <button type="submit">Shorten URL</button>
        </div>
      </form>
      <div class="result" v-if="shortUrl">
        <p>Shortened URL: <a :href="shortUrl" target="_blank">{{ shortUrl }}</a></p>
      </div>
      <div class="error" v-if="error">{{ error }}</div>
    </div>
  </template>

  <script>
  export default {
    data() {
      return {
        url: '',
        shortUrl: '',
        error: ''
      };
    },
    methods: {
      async submitUrl() {
        try {
          const response = await axios.post('/api/shorten-url', { url: this.url });
          this.shortUrl = response.data.url;
          this.error = '';
        } catch (error) {
          this.error = 'Failed to shorten URL. Please try again.';
          console.error('Error shortening URL:', error);
        }
      }
    }
  };
  </script>
