<template>
  <div class="resume__item">
    <h2 class="resume__title">Software Skills</h2>
    <div v-for="item in skills" :key="item.id">
      <p class="resume__description">
        <strong>{{ item.category }}:</strong>
        {{ item.skills.join(', ') }}
      </p>
    </div>
  </div>
</template>

<script setup lang="ts">
import axios from 'axios'
import { onMounted, ref } from 'vue'

interface SkillCategory {
  id: number;
  category: string;
  skills: string[];
}

const skills = ref<SkillCategory[]>([])

onMounted(async () => {
  const { data: skillsData } = await axios.get('/api/software-skills')
  skills.value = (skillsData.data || []).map((softwareSkills: any) => ({
    id: softwareSkills.id,
    category: softwareSkills.category,
    skills: typeof softwareSkills.skills === 'string'
      ? softwareSkills.skills.split(',').map((s: string) => s.trim())
      : (softwareSkills.skills || [])
  }))
})
</script>
