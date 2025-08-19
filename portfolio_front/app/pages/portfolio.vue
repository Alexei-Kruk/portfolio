<template>
  <section class="portfolio">
    <div class="container portfolio__container">
      <h1 class="portfolio__title text">Portfolio</h1>

      <div class="portfolio__wrapper">
        <a class="portfolio__item"
          v-for="item in projects"
          :key="item.id"
          :href="item.link"
          target="_blank"
        >
          <div class="portfolio__image-wrapper">
            <img :src="`http://localhost:92/storage/${item.image}`" :alt="item.title" class="portfolio__image" />
            <div class="portfolio__overlay">
              <h4 class="portfolio__name text">{{ item.title }}</h4>
              <div class="portfolio__hover-content">
                <p class="portfolio__description">{{ item.description }}</p>
                <p class="portfolio__stack"><strong>Stack:</strong> {{ item.stack }}</p>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
  </section>
</template>

<script setup lang="ts">
import axios from 'axios'
import { onMounted, ref } from 'vue'

interface ProjectItem {
  id: number;
  title: string;
  description: string;
  image: string;
  link: string;
  stack: string;
}

const projects = ref<ProjectItem[]>([])

onMounted(async () => {
  const { data } = await axios.get('/api/projects')
  projects.value = Array.isArray(data.data) ? data.data : [data.data]
  projects.value = projects.value.map((project: any) => ({
    id: project.id,
    title: project.title,
    description: project.description,
    image: project.image,
    link: project.link,
    stack: project.stack ? project.stack.join(', ') : ''
  }))
})
</script>

<style lang="scss">
@import "~/assets/scss/components/pages/portfolio";
</style>
