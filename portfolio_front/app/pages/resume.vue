<template>
  <section class="resume">
    <div class="container container_resume resume__container">
      <div class="resume__content">
        <div class="resume__item">
          <h2 class="resume__title">Software Skills</h2>
          <template v-for="cat in skills" :key="cat.title">
            <p class="resume__description">
              <strong>{{ cat.title }}:</strong>
              {{ cat.items.join(', ') }}
            </p>
          </template>
        </div>

        <div class="resume__item">
          <h2 class="resume__title">Languages</h2>
          <p v-for="lang in languages" :key="lang.name" class="resume__description text">
            <strong>{{ lang.name }}:</strong> {{ lang.level }}
          </p>
        </div>

        <div class="resume__item">
          <h2 class="resume__title">Soft Skills</h2>
          <ul>
            <li v-for="(s, i) in softSkills" :key="i" class="resume__description">{{ s }}</li>
          </ul>
        </div>
      </div>

      <div class="resume__content">
        <div class="resume__item" v-for="(exp, i) in experience" :key="i">
          <h2 class="resume__title">Experience</h2>
          <div class="resume__block">
            <span class="resume__date">{{ exp.from }}<br>to<br>{{ exp.to }}</span>
            <div class="resume__work">
              <h4 class="resume__company text">{{ exp.company }}</h4>
              <span class="resume__position text">{{ exp.position }}</span>
            </div>
          </div>
          <p class="resume__description text">{{ exp.description }}</p>
          <div class="resume__stacks-block">
            <p class="resume__description"><strong>Tech stack</strong></p>
            <div class="resume__stacks">
              <span v-for="(tech, j) in exp.stack" :key="j" class="resume__stack">{{ tech }}</span>
            </div>
          </div>
          <p class="resume__notable"><strong>Notable work includes</strong></p>
          <ul class="resume__notable-list">
            <li v-for="(n, k) in exp.notable" :key="k">{{ n }}</li>
          </ul>
        </div>
      </div>

      <div class="resume__content">
        <div class="resume__item">
          <h2 class="resume__title">Focus Areas</h2>
          <p class="resume__description text">{{ focus }}</p>
        </div>

        <div class="resume__item">
          <h2 class="resume__title">Hobbies & Interests</h2>
          <div class="resume__hobbies">
            <div class="resume__hobby-wrapper" v-for="(h, i) in hobbies" :key="i">
              <div class="resume__icon-wrapper">
                <img :src="h.icon" :alt="`${h.name} icon`" class="resume__icon" />
              </div>
              <span>{{ h.name }}</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
</template>

<script setup lang="ts">
import { useResumeData } from '@/composables/useResumeData'

const { skills, languages, softSkills, experience, focus, hobbies } = useResumeData()
</script>

<style lang="scss">
@import "~/assets/scss/components/pages/resume";
</style>
