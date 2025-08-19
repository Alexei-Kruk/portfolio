<template>
  <transition name="fade">
    <div v-if="visible" class="loader">
      <svg
        class="logo-svg"
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 200 200"
      >
        <!-- Белая подложка (логотип) -->
        <image href="/images/logo.svg" width="200" height="200" />

        <!-- Голубая заливка с clipPath -->
        <clipPath id="fill-clip">
          <rect
            :y="200 - (progress * 2)"
            width="200"
            :height="progress * 2"
          />
        </clipPath>

        <image
          href="/images/logo-blue.svg"
          width="200"
          height="200"
          clip-path="url(#fill-clip)"
        />
      </svg>
    </div>
  </transition>
</template>

<script setup>
import { onMounted, ref } from 'vue'

const visible = ref(true)
const progress = ref(0)

onMounted(() => {
  // ждём полной загрузки страницы
  if (document.readyState === 'complete') {
    startFill()
  } else {
    window.addEventListener('load', startFill)
  }
})

function startFill() {
  let percent = 0
  const interval = setInterval(() => {
    percent += 2
    progress.value = percent
    if (percent >= 100) {
      clearInterval(interval)
      setTimeout(() => {
        visible.value = false
      }, 400)
    }
  }, 20)
}
</script>

<style scoped lang="scss">
.loader {
  position: fixed;
  inset: 0;
  background: #000; // фон
  display: flex;
  justify-content: center;
  align-items: center;
  z-index: 9999;
}

.logo-svg {
  width: 150px;
  height: 150px;
}

.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.1s ease;
}

.fade-enter-from,
.fade-leave-to {
  opacity: 0;
}
</style>
