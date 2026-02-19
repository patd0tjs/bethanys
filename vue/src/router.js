import { createWebHashHistory, createRouter } from "vue-router";

import HomeView from "@/views/HomeView.vue";
import GalleryView from "@/views/GalleryView.vue";
import ServicesView from "@/views/ServicesView.vue";
import RentalsView from "@/views/RentalsView.vue";
import BookingView from "@/views/BookingsView.vue";

const routes = [
  { path: "/", component: HomeView },
  { path: "/gallery", component: GalleryView },
  { path: "/services", component: ServicesView },
  { path: "/rentals", component: RentalsView },
  { path: "/bookings", component: BookingView },
];

const router = createRouter({
  history: createWebHashHistory(),
  routes,
});

export default router;
