<template>
  <section class="about">
    <div class="container about__container">
      <div class="about__content">
        <div class="about__head">
          <h1 class="about__title text">{{ title }}</h1>
          <a class="about__email text" :href="`mailto:${email}`">{{ email }}</a>
        </div>

        <p class="about__description text" v-html="description"></p>
      </div>

      <div class="about__image">
        <img :src="photo.src" :alt="photo.alt">
      </div>

      <span class="about__footer text">
        <span class="dash">—</span>
        <span>{{ location }}</span>
        <span class="dash">—</span>
      </span>
    </div>
  </section>
</template>

<script setup>
const title = 'About'
const email = 'alexei.kruk.dev@gmail.com'
const location = 'Minsk, Belarus'

const photo = {
  src: '/images/photo.jpeg',
  alt: 'Me photo'
}

const description = `
  PHP/Backend Developer with Fullstack Experience
  <br><br>
  I enjoy building reliable and well-structured backend systems, integrating third-party services, and designing APIs that work consistently and without surprises. My commercial experience includes developing server-side logic in PHP (Laravel, MODX), designing and optimizing databases with MySQL and PostgreSQL, deploying projects to production servers, configuring environments, and integrating external APIs.
  <br><br>
  On the frontend side, I work with HTML/SCSS (BEM), JavaScript, and Nuxt.js, creating responsive and user-friendly interfaces for various devices.
  <br><br>
  In my work, I value clean and maintainable code, clear architecture, responsibility, and effective teamwork. If you are looking for a developer who will take your project from idea to successful delivery, let’s get in touch.
`
</script>

<style lang="scss">
@import "~/assets/scss/components/pages/about";
</style>
