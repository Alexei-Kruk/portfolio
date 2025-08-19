<template>
  <Loader v-if="isPageLoading" />
  <section v-else class="about">
    <div class="container about__container">
      <div class="about__content">
        <div class="about__head">
          <h1 class="about__title text">About</h1>
          <a class="about__email text" :href="`mailto:${email}`">{{ email }}</a>
        </div>

        <p class="about__description text" v-html="description"></p>
      </div>

      <div class="about__image">
        <img :src="`http://localhost:92/storage/${image}`" alt="Me photo">
      </div>

      <span class="about__footer text">
        <span class="dash">—</span>
        <span>{{ location }}</span>
        <span class="dash">—</span>
      </span>
    </div>
  </section>
</template>

<script setup lang="ts">
import Loader from '@/components/Loader.vue'
import axios from 'axios'
import { onMounted, ref, Ref } from 'vue'

interface AboutData {
  email: string;
  location: string;
  description: string;
  image: string;
}

const email: Ref<string> = ref('')
const location: Ref<string> = ref('')
const description: Ref<string> = ref('')
const image: Ref<string> = ref('')
const isPageLoading = ref(true)

onMounted(async () => {
  const { data } = await axios.get('/api/about')
  const about: AboutData = Array.isArray(data.data) ? data.data[0] : data.data
  email.value = about.email
  location.value = about.location
  description.value = about.description
  image.value = about.image
  isPageLoading.value = false
})
</script>

<style lang="scss">
@import "~/assets/scss/components/pages/about";
</style>
