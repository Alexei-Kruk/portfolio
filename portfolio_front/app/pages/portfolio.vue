<template>
  <section class="portfolio">
    <div class="container portfolio__container">
      <h1 class="portfolio__title text">Portfolio</h1>

      <div class="portfolio__wrapper">
        <a class="portfolio__item" :href="project.link" target="_blank" v-for="(project, index) in projects" :key="index">
          <div class="portfolio__image-wrapper">
            <img :src="project.image" :alt="project.title" class="portfolio__image" />
            <div class="portfolio__overlay">
              <h4 class="portfolio__name text">{{ project.title }}</h4>
              <div class="portfolio__hover-content">
                <p class="portfolio__description">{{ project.description }}</p>
                <p class="portfolio__stack"><strong>Stack:</strong> {{ project.stack }}</p>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  data() {
    return {
      projects: [
        {
          title: 'Corporate Website for Hydraulic Engineering Company',
          description:
            'Backend development with REST API integrations, optimized MySQL queries, and server-side logic.',
          stack: 'PHP, MODX, REST API, MySQL, Nuxt.js',
          image: '/images/portfolio/vodoroy.png',
          link: 'https://vodoroy.ru/'
        },
        {
          title: 'Corporate Catalog Website Template',
          description:
            'Fullstack development with dynamic content rendering and smooth animations.',
          stack: 'PHP, MODX, JavaScript, GSAP',
          image: '/images/portfolio/dev28.png',
          link: 'https://dev28.bm-sites.ru/'
        },
        {
          title: 'E-commerce Website Template',
          description:
            'Backend development with cart functionality, delivery options, and database-driven product management.',
          stack: 'PHP, MODX, MySQL, JavaScript, GSAP',
          image: '/images/portfolio/dev13.png',
          link: 'https://dev13-modx.testdevops.ru/'
        },
        {
          title: 'Restaurant Website iiko API Integration',
          description:
            'Backend integration with iiko API for automated menu updates and order processing.',
          stack: 'PHP, MODX, Fenom, REST API, MySQL',
          image: '/images/portfolio/sushison.png',
          link: 'https://sushinson.ru/'
        }
      ]
    };
  }
};
</script>

<style lang="scss">
@import "~/assets/scss/components/pages/portfolio";
</style>
