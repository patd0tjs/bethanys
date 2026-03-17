<script setup>
import Logo from "@/assets/images/logo.png";
</script>

<template>
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top custom-navbar">
    <div class="container">
      <RouterLink to="/" class="navbar-brand fw-bold cursive">
        <img
          :src="Logo"
          alt="Bethany's Events Logo"
          class="img-fluid"
          id="logo-img"
        />
      </RouterLink>

      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navMenu"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navMenu">
        <ul class="navbar-nav ms-auto align-items-lg-center">
          <li class="nav-item">
            <RouterLink
              to="/"
              class="nav-link"
              active-class="active-link"
              exact-active-class="active-link"
              >Home</RouterLink
            >
          </li>
          <li class="nav-item">
            <RouterLink
              to="/works"
              class="nav-link"
              active-class="active-link"
              exact-active-class="active-link"
              >Our Works</RouterLink
            >
          </li>
          <li class="nav-item">
            <RouterLink
              to="/rentals"
              class="nav-link"
              active-class="active-link"
              exact-active-class="active-link"
              >Rentals</RouterLink
            >
          </li>
          <li class="nav-item">
            <RouterLink
              to="/services"
              class="nav-link"
              active-class="active-link"
              exact-active-class="active-link"
              >Services</RouterLink
            >
          </li>

          <li class="nav-item ms-lg-3">
            <RouterLink to="/contact" class="btn btn-gold"
              >Contact Us</RouterLink
            >
          </li>
        </ul>
      </div>
    </div>
  </nav>
</template>

<style scoped>
#logo-img {
  max-height: 4rem;
}
.custom-navbar {
  background: rgba(0, 0, 0, 0.85);
  backdrop-filter: blur(6px);
  z-index: 1050;
}

.navbar-brand {
  color: #fff;
}

.nav-link {
  color: #e0e0e0;
}

.nav-link:hover {
  color: #c9a24d;
}

.active-link {
  color: #c9a24d;
}
</style>
