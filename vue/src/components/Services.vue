<script setup>
import { ref } from "vue";
const services = ref([
  {
    id: 1,
    title: "Wedding Coordination",
    description: "From planning to execution, we handle everything.",
  },
  {
    id: 2,
    title: "Event Styling",
    description: "Elegant themes, décor, and visual storytelling.",
  },
  {
    id: 3,
    title: "Formal Wear Rentals",
    description: "Gowns, suits, and coordinated attire.",
  },
]);
</script>

<template>
  <section class="section-dark">
    <div class="container text-center">
      <h2 class="section-title cursive">What We Do</h2>
      <div class="row g-4 mt-4">
        <div v-for="service in services" :key="service.id" class="col-md-4">
          <div class="card dark-card">
            <h5 class="cursive">{{ service.title }}</h5>
            <p>{{ service.description }}</p>
          </div>
        </div>
      </div>
    </div>
  </section>
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
  color: white;
}
</style>
