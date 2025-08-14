<template>
  <div class="page">
    <Loader />
    <Header />
    <main class="main">
      <NuxtPage />
    </main>
    <Footer />
  </div>
</template>

<script setup>
import Footer from '~/components/Footer.vue'
import Header from '~/components/Header.vue'
import Loader from '~/components/Loader.vue'
</script>
