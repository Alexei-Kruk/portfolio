<template>
  <Loader v-if="isLoading" />
  <div v-else class="resume__item">
    <h2 class="resume__title">Experience</h2>
    <div v-for="item in experience" :key="item.id">
      <div class="resume__block">
        <span class="resume__date">
          {{ item.date_from }}<br>to<br>{{ item.date_to }}
        </span>
        <div class="resume__work">
          <h4 class="resume__company text">{{ item.company_name }}</h4>
          <span class="resume__position text">{{ item.position }}</span>
        </div>
      </div>
      <p class="resume__description text">{{ item.short_description }}</p>
      <div class="resume__stacks-block">
        <p class="resume__description"><strong>Tech stack</strong></p>
        <div class="resume__stacks">
          <span
            v-for="(stack, index) in item.stacks"
            :key="index"
            class="resume__stack"
          >
            {{ stack.name }}
          </span>
        </div>
      </div>
      <p class="resume__notable"><strong>Notable work includes</strong></p>
      <ul class="resume__notable-list">
        <li
          v-for="(result, index) in item.results"
          :key="index"
        >
          {{ result.result }}
        </li>
      </ul>
    </div>
  </div>
</template>

<script setup lang="ts">
import Loader from '@/components/Loader.vue'
import axios from 'axios'
import { onMounted, ref } from 'vue'

interface ExperienceItem {
  id: number;
  company_name: string;
  position: string;
  short_description: string;
  date_from: string;
  date_to: string;
  stacks: { name: string }[];
  results: { result: string }[];
}

const experience = ref<ExperienceItem[]>([])
const isLoading = ref(true)

onMounted(async () => {
  const { data: expData } = await axios.get('/api/experiences')
  experience.value = (expData.data || []).map((experienceItem: any) => ({
    ...experienceItem
  }))
  isLoading.value = false
})
</script>