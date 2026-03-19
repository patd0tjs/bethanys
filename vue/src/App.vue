<script setup>
import Navbar from "./components/Navbar.vue";
import { provide } from "vue";

const ENV = import.meta.env;

const BASE_URL = ENV.VITE_API;
provide("ENV", ENV);
provide("BASE_URL", BASE_URL);
</script>

<template>
  <Navbar />
  <h1 class="mt-3 text-center cursive" v-if="ENV.VITE_ENV == 'DEMO'">
    This is demo application. Not for commercial use!
  </h1>
  <RouterView />
</template>

<style scoped>
.section-dark {
  padding: 80px 0;
}

.section-title {
  color: #c9a24d;
}

.dark-card {
  background: #141414;
  padding: 30px;
  border-radius: 12px;
  border: none;
}
</style>
