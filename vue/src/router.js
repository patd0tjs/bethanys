import { createWebHashHistory, createRouter } from "vue-router";

import HomeView from "@/views/HomeView.vue";
import WorksView from "@/views/WorksView.vue";
import ServicesView from "@/views/ServicesView.vue";
import RentalsView from "@/views/RentalsView.vue";
import ContactView from "@/views/ContactView.vue";

const routes = [
  { path: "/", component: HomeView },
  { path: "/works", component: WorksView },
  { path: "/services", component: ServicesView },
  { path: "/rentals", component: RentalsView },
  { path: "/contact", component: ContactView },
];

const router = createRouter({
  history: createWebHashHistory(),
  routes,
});

export default router;
