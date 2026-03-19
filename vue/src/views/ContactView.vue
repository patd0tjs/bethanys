<script setup></script>

<template>
  <section class="page-section">
    <div class="container text-center">
      <div class="contact-info-container">
        <h1 class="contact-title cursive">Contact Us</h1>

        <div class="mb-3">
          <span class="label">Visit Us</span>
          <p>Poblacion, Valencia, Philippines, 8700</p>
        </div>

        <div class="mb-3">
          <span class="label">Call Us</span>
          <p><a href="tel:+639175663172">+63 917 566 3172</a></p>
        </div>

        <div class="mb-4">
          <span class="label">Send Us an Email</span>
          <p>
            <a href="mailto:hello@bethanys.com"
              >bethanysweddingevents@gmail.com</a
            >
          </p>
        </div>

        <div class="mb-5">
          <span class="label facebook">
            <a
              href="https://www.facebook.com/profile.php?id=61584940190349"
              target="_blank"
              rel="noopener noreferrer"
            >
              Click here
            </a>
            to visit our Facebook page
          </span>
        </div>
      </div>
      <div class="text-center">
        <h1 class="contact-title cursive">Our Location</h1>
        <iframe
          width="100%"
          height="500px"
          frameborder="0"
          scrolling="no"
          marginheight="0"
          marginwidth="0"
          src="https://maps.google.com/maps?width=100%25&amp;height=500&amp;hl=en&amp;q=7.903060764555979,125.09087714816481+(Bethany's%20Events)&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
        ></iframe>
      </div>
    </div>
  </section>
</template>

<style scoped>
.page-section {
  padding: 80px 0;
}

.contact-title {
  font-size: 3rem;
}

.label {
  display: block;
  color: #ffffff;
  text-decoration: none;
  transition: color 0.3s ease;
  text-transform: uppercase;
  letter-spacing: 2px;
  font-size: 0.8rem;
  margin-bottom: 8px;
  color: #c9a24d;
}

p {
  display: block;
  color: #ffffff;
  text-decoration: none;
  transition: color 0.3s ease;
  text-transform: uppercase;
  letter-spacing: 2px;
  font-size: 0.8rem;
  margin-bottom: 8px;
}

.page-section a {
  color: #ffffff;
  text-decoration: none;
  transition: color 0.3s ease;
  text-transform: uppercase;
  letter-spacing: 2px;
  font-size: 0.8rem;
  line-height: 1.6;
}

.page-section a:hover {
  color: #d4af37;
}

.facebook a {
  color: #d4af37 !important;
}

.facebook {
  color: white;
}
</style>
