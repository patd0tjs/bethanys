<script setup>
import { ref, onMounted, inject } from "vue";
import LocalHero from "@/assets/img/hero.jpg";
const ENV = inject("ENV");
let HERO_IMG_URL = ref(LocalHero);

if (ENV.VITE_ENV !== "DEMO") {
  const API_BASE = inject("BASE_URL");
  HERO_IMG_URL = ref("");

  async function fetchHero() {
    try {
      const res = await fetch(`${API_BASE}/hero`);
      const data = await res.json();
      HERO_IMG_URL.value = data[0] || "";
    } catch (err) {
      console.error("Failed to load hero photo:", err);
    }
  }

  onMounted(fetchHero);
}
</script>

<template>
  <section
    class="hero"
    :style="{ background: `url(${HERO_IMG_URL}) center/cover no-repeat` }"
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
  color: #ffffff;
  text-decoration: none;
  transition: color 0.3s ease;
  text-transform: uppercase;
  letter-spacing: 2px;
  font-size: 0.8rem;
}

.hero-desc {
  color: #ffffff;
  text-decoration: none;
  transition: color 0.3s ease;
  text-transform: uppercase;
  letter-spacing: 2px;
  font-size: 0.8rem;
}

.hero-actions {
  margin-top: 20px;
  color: #ffffff;
  text-decoration: none;
  transition: color 0.3s ease;
  text-transform: uppercase;
  font-size: 0.8rem;
  letter-spacing: 2px;
}
</style>
