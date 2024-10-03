<template>
  <div>
    <h1>Login</h1>
    <form @submit.prevent="login">
      <input v-model="email" placeholder="Email" type="email" required />
      <input v-model="password" placeholder="Password" type="password" required />
      <button type="submit">Login</button>
    </form>
    <div v-if="errorMessage">{{ errorMessage }}</div>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      email: '',
      password: '',
      errorMessage: ''
    };
  },
  methods: {
    async login() {
      try {
        const response = await axios.post('/api/login', {
          email: this.email,
          password: this.password
        });
        // Manejar el usuario autenticado
        this.$store.commit('setUser', response.data.user);
        //window.location.href('localhost:8000')
        //this.$router.push('/'); // Redirigir a la página principal
      } catch (error) {
        this.errorMessage = error.response.data.message || 'Error en el inicio de sesión';
      }
    }
  }
};
</script>
