<script setup>
import { ref, onMounted, inject } from "vue";

const API_BASE = inject("BASE_URL");

const galleries = ref([]);

async function fetchGalleries() {
  try {
    const res = await fetch(`${API_BASE}/gallery`);
    const data = await res.json();
    galleries.value = data.map((url, idx) => ({
      id: idx + 1,
      img: url.startsWith("http") ? url : `${API_BASE}${url}`,
    }));
  } catch (err) {
    console.error("Failed to load gallery photos:", err);
  }
}

onMounted(fetchGalleries);
</script>

<template>
  <section class="page-section">
    <div class="container">
      <h1 class="section-title text-center cursive">Our Works</h1>
      <div class="row g-4 mt-4">
        <div
          v-for="gallery in galleries"
          :key="gallery.id"
          class="col-md-4 gallery-item"
        >
          <div class="photo-wrapper mb-3">
            <img :src="gallery.img" class="img-fluid rounded" alt="" />
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<style scoped>
.photo-wrapper {
  aspect-ratio: 4 / 3;
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
.gallery-item {
  transition: transform 0.3s ease;
}
.gallery-item:hover {
  transform: scale(1.05);
}
</style>
