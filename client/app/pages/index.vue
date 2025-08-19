<template>
  <Loader v-if="isPageLoading" />
  <section v-else class="hero">
    <div class="container">
      <div class="hero__content">
        <div class="hero__head">
          <h1 class="hero__title">
            {{ firstName }}<br>
            <span>{{ lastName }}</span>
          </h1>
          <p class="hero__subtitle text">{{ jobTitle }}</p>
        </div>

        <div class="hero__buttons">
          <NuxtLink
            v-for="(btn, i) in buttons"
            :key="i"
            :to="btn.link"
            class="hero__button button"
          >
            {{ btn.label }}
          </NuxtLink>
        </div>
      </div>

      <HeroSocials />
    </div> 
  </section>
</template>

<script setup lang="ts">
import HeroSocials from '@/components/HeroSocials.vue'
import Loader from '@/components/Loader.vue'
import axios from 'axios'
import { onMounted, ref, Ref } from 'vue'

interface HomeData {
  first_name: string;
  last_name: string;
  position: string;
}

const firstName: Ref<string> = ref('')
const lastName: Ref<string> = ref('')
const jobTitle: Ref<string> = ref('')
const isPageLoading = ref(true)

onMounted(async () => {
  const { data } = await axios.get('/api/home')
  const home: HomeData = Array.isArray(data.data) ? data.data[0] : data.data
  firstName.value = home.first_name
  lastName.value = home.last_name
  jobTitle.value = home.position
  isPageLoading.value = false
})

interface Button {
  label: string;
  link: string;
}

const buttons: Button[] = [
  { label: 'Resume', link: '/resume' },
  { label: 'Portfolio', link: '/portfolio' }
];
</script>

<style lang="scss">
@import "~/assets/scss/components/pages/hero";
</style>
