<template>
  <div class="resume__item">
    <h2 class="resume__title">Hobbies & Interests</h2>
    <div class="resume__hobbies">
      <div class="resume__hobby-wrapper" v-for="item in hobbies" :key="item.id">
        <div class="resume__icon-wrapper">
          <img :src="item.icon" :alt="`${item.name} icon`" class="resume__icon" />
        </div>
        <span>{{ item.name }}</span>
      </div>
    </div>
  </div>
</template>

<script setup lang="ts">
import axios from 'axios'
import { onMounted, ref } from 'vue'

export interface HobbyItem {
  id: number;
  name: string;
  icon: string;
}

const hobbies = ref<HobbyItem[]>([])

onMounted(async () => {
  const { data: hobbyData } = await axios.get('/api/hobbies')
    hobbies.value = (hobbyData.data || []).map((hobby: any) => ({
      id: hobby.id,
      name: hobby.name,
      icon: `http://localhost:92/storage/${hobby.icon}`
    }))
})
</script>