<script setup>
import { ref, onMounted, inject } from "vue";

const API_BASE = inject("baseUrl");

const rentals = ref([]);

async function fetchGalleries() {
  try {
    const res = await fetch(`${API_BASE}/rentals`);
    const data = await res.json();
    rentals.value = data.map((url, idx) => ({
      id: idx + 1,
      img: url.startsWith("http") ? url : `${API_BASE}${url}`,
    }));
  } catch (err) {
    console.error("Failed to load rental photos:", err);
  }
}

onMounted(fetchGalleries);
</script>

<template>
  <section class="page-section">
    <div class="container">
      <h1 class="section-title text-center cursive">Formal Wear Rentals</h1>
      <p class="text-center">
        Bridal gowns, suits, entourage wear, and accessories.
      </p>
      <div class="row g-4 mt-4">
        <div
          v-for="rental in rentals"
          :key="rental.id"
          class="col-md-4 rental-item"
        >
          <div class="photo-wrapper mb-3">
            <img :src="rental.img" class="img-fluid rounded" alt="" />
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<!-- <style scoped>
.page-section {
  padding: 80px 0;
}
</style> -->

<style scoped>
.photo-wrapper {
  aspect-ratio: 3 / 4;
  overflow: hidden;
  border-radius: 8px;
  background: #f8f9fa;
}

.photo-wrapper img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

/* zoom the whole column */
.rental-item {
  transition: transform 0.3s ease;
}
.rental-item:hover {
  transform: scale(1.05);
}

.page-section p {
  color: #ffffff;
  text-decoration: none;
  transition: color 0.3s ease;
  text-transform: uppercase;
  letter-spacing: 2px;
  font-size: 0.8rem;
}
</style>
