<script setup>
import { ref, onMounted, inject } from "vue";
import rental1 from "@/assets/img/rentals/1.jpg";
import rental2 from "@/assets/img/rentals/2.jpg";
import rental3 from "@/assets/img/rentals/3.jpg";
import rental4 from "@/assets/img/rentals/4.jpg";
import rental5 from "@/assets/img/rentals/5.jpg";
import rental6 from "@/assets/img/rentals/6.jpg";
import rental7 from "@/assets/img/rentals/7.jpg";
import rental8 from "@/assets/img/rentals/8.jpg";
import rental9 from "@/assets/img/rentals/9.jpg";

const ENV = inject("ENV");
const API_BASE = inject("BASE_URL");

let rentals = ref([
  {
    id: 1,
    img: rental1,
  },

  {
    id: 2,
    img: rental2,
  },
  {
    id: 3,
    img: rental3,
  },
  {
    id: 4,
    img: rental4,
  },
  {
    id: 5,
    img: rental5,
  },
  {
    id: 6,
    img: rental6,
  },
  {
    id: 7,
    img: rental7,
  },
  {
    id: 8,
    img: rental8,
  },
  {
    id: 9,
    img: rental9,
  },
]);

if (ENV.VITE_ENV !== "DEMO") {
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
}
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
