<script setup>
import Navbar from "./components/Navbar.vue";
import { provide } from "vue";

const baseUrl = "http://localhost:8000/api";

provide("baseUrl", baseUrl);
</script>

<template>
  <Navbar />
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
