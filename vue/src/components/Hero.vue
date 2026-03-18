<script setup>
import { ref, onMounted, inject } from "vue";

const API_BASE = inject("baseUrl");

const heroImgUrl = ref('');

async function fetchHero() {
  try {
    const res = await fetch(`${API_BASE}/hero`);
    const data = await res.json();
    heroImgUrl.value = data[0] || '';
  } catch (err) {
    console.error("Failed to load hero photo:", err);
  }
}

onMounted(fetchHero);

</script>

<template>
  <section
    class="hero"
    :style="{ background: `url(${heroImgUrl}) center/cover no-repeat` }"
  >
    <div class="hero-overlay"></div>
    <div class="container hero-content text-center">
      <h2 class="cursive">Welcome to</h2>
      <h1 class="cursive">Bethany's Events Organizing Services</h1>
      <p class="hero-sub">Planning • Styling • Formal Wear Rentals</p>
      <p class="hero-desc">
        We create elegant, stress-free weddings so you can focus on celebrating
        love.
      </p>
      <div class="hero-actions">
        <RouterLink to="/contact" class="btn btn-gold me-2"
          >Contact Us</RouterLink
        >

        <RouterLink to="/works" class="btn btn-outline-light"
          >View Our Works</RouterLink
        >
      </div>
    </div>
  </section>
</template>

<style scoped>
.hero {
  position: relative;
  min-height: 90vh;
  display: flex;
  align-items: center;
}

.hero-overlay {
  position: absolute;
  inset: 0;
  background: rgba(0, 0, 0, 0.7);
}

.hero-content {
  position: relative;
  z-index: 1;
}

.hero h1 {
  font-size: 3rem;
}

.hero h2 {
  font-size: 2.5rem;
}

.hero-sub {
  color: #c9a24d;
  letter-spacing: 2px;
}

.hero-actions {
  margin-top: 20px;
}
</style>
