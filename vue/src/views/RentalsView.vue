<script setup>
import { ref } from "vue";
import rental1 from "@/assets/images/rental-1.jpg";
import rental2 from "@/assets/images/rental-2.jpg";
import rental3 from "@/assets/images/rental-3.jpg";
import rental4 from "@/assets/images/rental-4.jpg";
import rental5 from "@/assets/images/rental-5.jpg";
import rental6 from "@/assets/images/rental-6.jpg";

const rentals = ref([
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
]);
</script>

<template>
  <section class="page-section">
    <div class="container">
      <h1 class="section-title text-center cursive">Formal Wear Rentals</h1>
      <p class="text-center">
        Bridal gowns, suits, entourage wear, and accessories.
      </p>
      <div class="row g-4 mt-4">
        <div v-for="rental in rentals" :key="rental.id" class="col-md-4">
          <img :src="rental.img" class="img-fluid rounded" alt="" />
        </div>
      </div>
    </div>
  </section>
</template>

<style scoped>
.page-section {
  padding: 80px 0;
}
</style>
