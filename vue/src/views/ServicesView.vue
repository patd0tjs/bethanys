<script setup>
import { ref } from "vue";
const services = ref([
  {
    id: 1,
    title: "Full Wedding Planning",
    description: "A comprehensive, start-to-finish experience for the couple who wants every detail expertly curated. From venue selection to the final dance, we manage the logistics so you can enjoy the journey.",
  },
  {
    id: 2,
    title: "Day-Of Coordination",
    description: "For the couple who has planned their dream day but wants to be a guest at their own wedding. We step in to oversee the timeline, manage vendors, and ensure everything runs flawlessly.",
  },
  {
    id: 3,
    title: "Event Styling & Décor",
    description: "We transform spaces into breathtaking environments. Our design team focuses on cohesive aesthetics, floral concepts, and unique details that reflect your personal love story.",
  },
    {
    id: 4,
    title: "Supplier & Vendor Management",
    description: "Benefit from our curated network of top-tier professionals. We handle the contracts, communications, and scheduling, ensuring you have the best team supporting your vision",
  },
    {
    id: 5,
    title: "Occasion Dress & Attire Rentals",
    description: "Access our exclusive collection of designer gowns and formal wear. Whether for a pre-wedding shoot or the grand event, we provide high-end styling options that ensure you look your most radiant without the commitment of a permanent purchase"
  },
]);
</script>

<template>
  <section class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h1 class="section-title cursive text-center">Our Services</h1>
          <div v-for="service in services" :key="service.id">
            <div class="card dark-card mb-3">
              <h2 class="cursive text-center">{{ service.title }}</h2>
              <p>{{ service.description }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<style scoped>

.dark-card {
  background: #141414;
  padding: 30px;
  border-radius: 12px;
  border: none;
  color: white;
  display: flex;
  flex-direction: column;
  width: 100%;
  opacity: 80%;
}

.dark-card p {
  color: #ffffff;
  text-decoration: none;
  transition: color 0.3s ease;
  text-transform: uppercase;
  letter-spacing: 2px;
  font-size: 0.8rem;
}

.page-section {
  position: relative;
  padding: 80px 0;
  overflow: hidden;
  min-height: calc(100vh - 80px);
}

.page-section::before {
  content: "";
  position: absolute;
  inset: 0;
  z-index: -1;
  background: url(../assets/services_bg.jpg) center/cover no-repeat;
  -webkit-mask-image: linear-gradient(to right, transparent 30%, black 90%);
  mask-image: linear-gradient(to right, transparent 30%, black 90%);
}
</style>
