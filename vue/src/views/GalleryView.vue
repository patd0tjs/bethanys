<script setup>
import { ref } from "vue";
import gallery1 from "@/assets/images/gallery1.jpg";
import gallery2 from "@/assets/images/gallery2.jpg";
import gallery3 from "@/assets/images/gallery3.jpg";
import gallery4 from "@/assets/images/gallery4.jpg";
import gallery5 from "@/assets/images/gallery5.jpg";
import gallery6 from "@/assets/images/gallery6.jpg";
import gallery7 from "@/assets/images/gallery7.jpg";
import gallery8 from "@/assets/images/gallery8.jpg";
import gallery9 from "@/assets/images/gallery9.jpg";

const galleries = ref([
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
</script>

<template>
  <section class="page-section">
    <div class="container">
      <h1 class="section-title text-center cursive">Our Work</h1>
      <div class="row g-4 mt-4">
        <div v-for="gallery in galleries" :key="gallery.id" class="col-md-4">
          <img :src="gallery.img" class="img-fluid rounded" alt="" />
        </div>
      </div>
    </div>
  </section>
</template>

<style lang="scss" scoped></style>
