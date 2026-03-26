<script setup>
import { ref, onMounted, inject } from "vue";
import gallery1 from "@/assets/img/gallery/1.jpg";
import gallery2 from "@/assets/img/gallery/2.jpg";
import gallery3 from "@/assets/img/gallery/3.jpg";
import gallery4 from "@/assets/img/gallery/4.jpg";
import gallery5 from "@/assets/img/gallery/5.jpg";
import gallery6 from "@/assets/img/gallery/6.jpg";
import gallery7 from "@/assets/img/gallery/7.jpg";
import gallery8 from "@/assets/img/gallery/8.jpg";
import gallery9 from "@/assets/img/gallery/9.jpg";

const ENV = inject("ENV");
const API_BASE = inject("BASE_URL");

let galleries = ref([
  {
    id: 1,
    img: gallery1,
  },

  {
    id: 2,
    img: gallery2,
  },
  {
    id: 3,
    img: gallery3,
  },
  {
    id: 4,
    img: gallery4,
  },
  {
    id: 5,
    img: gallery5,
  },
  {
    id: 6,
    img: gallery6,
  },
  {
    id: 7,
    img: gallery7,
  },
  {
    id: 8,
    img: gallery8,
  },
  {
    id: 9,
    img: gallery9,
  },
]);

if (ENV.VITE_ENV !== "DEMO") {
  async function fetchGalleries() {
    try {
      const res = await fetch(`${API_BASE}/works`);
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
}
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
