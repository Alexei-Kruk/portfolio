<template>
  <div class="resume__item">
    <h2 class="resume__title">Soft Skills</h2>
    <ul>
      <li
        v-for="item in softSkills"
        :key="item.id"
        class="resume__description"
      >
        {{ item.name }}
      </li>
    </ul>
  </div>
</template>

<script setup lang="ts">
import axios from 'axios'
import { onMounted, ref } from 'vue'

interface SoftSkill {
  id: number;
  name: string;
}

const softSkills = ref<SoftSkill[]>([])

onMounted(async () => {
  const { data: softData } = await axios.get('/api/soft-skills')
  softSkills.value = (softData.data || []).map((softSkill: any) => ({
    id: softSkill.id,
    name: softSkill.name
  }))
})
</script>
