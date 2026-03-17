<script setup></script>

<template>
  <section class="page-section">
    <div class="container">
      <h1 class="section-title">Book a Consultation</h1>

      <form class="booking-form">
        <input type="text" class="form-control mb-3" placeholder="Full Name" />
        <input type="email" class="form-control mb-3" placeholder="Email" />
        <input type="date" class="form-control mb-3" />
        <textarea
          class="form-control mb-3"
          rows="4"
          placeholder="Tell us about your event"
        ></textarea>
        <button class="btn btn-gold" disabled>Submit</button>
      </form>
    </div>
  </section>
</template>

<style scoped>
.page-section {
  padding: 80px 0;
}
</style>
