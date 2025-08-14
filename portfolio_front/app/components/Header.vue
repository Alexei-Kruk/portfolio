<template>
  <header class="header">
    <!-- Бургер -->
    <button
      class="burger"
      @click="isMenuOpen = !isMenuOpen"
      v-if="isMobile"
      :aria-label="isMenuOpen ? 'Закрыть меню' : 'Открыть меню'"
    >
      <span :class="['burger__line', { 'burger__line--open': isMenuOpen }]"></span>
      <span :class="['burger__line', { 'burger__line--open': isMenuOpen }]"></span>
      <span :class="['burger__line', { 'burger__line--open': isMenuOpen }]"></span>
    </button>

    <!-- Навигация -->
    <nav :class="['header__nav nav', { 'nav--open': isMenuOpen && isMobile }]">
      <ul class="nav__list">
        <li v-for="item in navItems" :key="item.to">
          <NuxtLink
            class="nav__item text"
            :to="item.to"
            @click="closeMenu"
          >
            {{ item.label }}
          </NuxtLink>
        </li>
      </ul>
    </nav>

    <!-- Телефон -->
    <a class="header__phone" :href="`tel:${phone}`">
      <img :src="phoneIcon[0].icon" :alt="phoneIcon[0].name" class="icon">
      <span class="header__phone-number text">{{ formattedPhone }}</span>
    </a>

    <!-- Затемнение -->
    <div
      v-if="isMenuOpen && isMobile"
      class="overlay"
      @click="closeMenu"
    ></div>
  </header>
</template>

<script setup>
import { onBeforeUnmount, onMounted, ref } from 'vue'

const isMenuOpen = ref(false)
const isMobile = ref(false)

const checkMobile = () => {
  isMobile.value = window.innerWidth <= 750
}

const closeMenu = () => {
  isMenuOpen.value = false
}

onMounted(() => {
  checkMobile()
  window.addEventListener('resize', checkMobile)
})
onBeforeUnmount(() => {
  window.removeEventListener('resize', checkMobile)
})

const navItems = [
  { to: '/', label: 'Home' },
  { to: '/about', label: 'About' },
  { to: '/resume', label: 'Resume' },
  { to: '/portfolio', label: 'Portfolio' }
]

const phoneIcon = [
  { name: 'Phone', icon: '/images/icons/phone.svg' }
]

const phone = '+375295744458'
const formattedPhone = '375-29-57-444-58'
</script>

<style lang="scss">
@import "~/assets/scss/components/elements/header";
@import "~/assets/scss/components/elements/nav";
</style>
