<template>
  <section class="hero">
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

<script setup>
import HeroSocials from '@/components/HeroSocials.vue'

const firstName = 'Alexei'
const lastName = 'Kruk'
const jobTitle = 'Backend Developer'

const buttons = [
  { label: 'Resume', link: '/resume' },
  { label: 'Portfolio', link: '/portfolio' }
]
</script>

<style lang="scss">
@import "~/assets/scss/components/pages/hero";
</style>
