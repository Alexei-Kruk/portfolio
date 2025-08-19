<template>
  <Loader v-if="isPageLoading" />
  <section v-else class="resume">
    <div class="container container_resume resume__container">
      <div class="resume__content">
        <SoftwareSkills />
        <Languages />
        <SoftSkills />
      </div>
      <div class="resume__content">
        <Experiences />
      </div>
      <div class="resume__content">
        <FocusAreas />
        <Hobbies />
      </div>
    </div>
  </section>
</template>

<script setup lang="ts">
import Loader from '@/components/Loader.vue'
import Experiences from '@/components/resume/Experiences.vue'
import FocusAreas from '@/components/resume/FocusAreas.vue'
import Hobbies from '@/components/resume/Hobbies.vue'
import Languages from '@/components/resume/Languages.vue'
import SoftSkills from '@/components/resume/SoftSkills.vue'
import SoftwareSkills from '@/components/resume/SoftwareSkills.vue'
import { ref, onMounted } from 'vue'

const isPageLoading = ref(true)
onMounted(() => {
  // Можно добавить ожидание загрузки данных из дочерних компонентов через эмиты или глобальный стейт
  // Пока просто скрываем Loader после mount (минимальный UX)
  setTimeout(() => { isPageLoading.value = false }, 400)
})
</script>

<style lang="scss">
@import "~/assets/scss/components/pages/resume";
</style>
