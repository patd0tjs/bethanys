<script setup>
const API_BASE = "http://localhost:8000";
const servicesImgUrl = `${API_BASE}/storage/web/hero.jpg`;
</script>

<template>
  <section class="page-section">
    <div class="container">
      <h1 class="section-title cursive">Our Services</h1>
      <div class="row">
        <div class="col">
          <ul class="service-list">
            <li>Full Wedding Planning</li>
            <li>Day-Of Coordination</li>
            <li>Event Styling & Décor</li>
            <li>Supplier & Vendor Management</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
</template>

<style scoped>
.page-section {
  position: relative;
  padding: 80px 0;
  overflow: hidden;
}

.page-section::before {
  content: "";
  position: absolute;
  inset: 0;
  z-index: -1;
  background: url("http://localhost:8000/storage/web/hero.jpg") center right /
    cover no-repeat;
  /* Fade the image out to transparent on the left edge (more aggressive transition) */
  -webkit-mask-image: linear-gradient(to right, transparent 25%, black 45%);
  mask-image: linear-gradient(to right, transparent 25%, black 45%);
}
</style>
