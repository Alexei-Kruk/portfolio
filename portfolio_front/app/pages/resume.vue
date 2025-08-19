<template>
  <section class="resume">
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
import Experiences from '@/components/resume/Experiences.vue'
import FocusAreas from '@/components/resume/FocusAreas.vue'
import Hobbies from '@/components/resume/Hobbies.vue'
import Languages from '@/components/resume/Languages.vue'
import SoftSkills from '@/components/resume/SoftSkills.vue'
import SoftwareSkills from '@/components/resume/SoftwareSkills.vue'
</script>

<style lang="scss">
@import "~/assets/scss/components/pages/resume";
</style>
