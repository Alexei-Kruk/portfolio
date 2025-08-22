<template>
  <div class="page">
    <Loader />
    <Header />
    <main class="main">
      <NuxtPage />
    </main>
    <Footer />
  </div>
</template>

<script setup lang="ts">
import axios from 'axios'
import { onMounted } from 'vue'
import Footer from '~/components/Footer.vue'
import Header from '~/components/Header.vue'
import Loader from '~/components/Loader.vue'

interface HomeData {
  phone: string;
}

const phone = useState<string>('phone', () => '')
onMounted(async () => {
  try {
    const { data } = await axios.get('https://api.alexei-kruk.com/api/home')
    const home: HomeData = Array.isArray(data.data) ? data.data[0] : data.data
    phone.value = home.phone
  } catch (e) {
    phone.value = ''
  }
})
</script>
