<template>
  <div class="resume__item">
    <h2 class="resume__title">Focus Areas</h2>
    <p class="resume__description text">{{ focus }}</p>
  </div>
</template>

<script setup lang="ts">
import axios from 'axios'
import { onMounted, ref } from 'vue'

const focus = ref('')

onMounted(async () => {
  const { data: focusData } = await axios.get('/api/focus-areas')
    focus.value = (focusData.data && focusData.data[0]) ? focusData.data[0].focus_areas : ''
})
</script>