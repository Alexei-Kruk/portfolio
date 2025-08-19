<template>
  <div class="resume__item">
    <h2 class="resume__title">Languages</h2>
    <p
      v-for="item in languages"
      :key="item.id"
      class="resume__description text"
    >
      <strong>{{ item.language }}:</strong> {{ item.proficiency }}
    </p>
  </div>
</template>

<script setup lang="ts">
import axios from 'axios'
import { onMounted, ref } from 'vue'

interface LanguageItem {
  id: number;
  language: string;
  proficiency: string;
}

const languages = ref<LanguageItem[]>([])

onMounted(async () => {
  const { data: langData } = await axios.get('/api/languages')
  languages.value = (langData.data || []).map((languageItem: any) => ({
    id: languageItem.id,
    language: languageItem.language,
    proficiency: languageItem.proficiency
  }))
})
</script>
