<template>
  <div class="socials">
    <a
      v-for="social in socials"
      :key="social.id"
      :href="social.url"
      class="socials__link"
      target="_blank"
      rel="noopener noreferrer"
      :aria-label="social.platform"
    >
      <img :src="`http://localhost:92/storage/${social.icon}`" :alt="social.name" class="socials__icon" />
    </a>
  </div>
</template>

<script setup lang="ts">
import axios from 'axios'
import { onMounted, ref, Ref } from 'vue'

interface SocialItem {
  id: number;
  name: string;
  platform: string;
  url: string;
  icon: string;
}

const socials: Ref<SocialItem[]> = ref([])

onMounted(async () => {
  const { data } = await axios.get('/api/socials')
  const arr = Array.isArray(data.data) ? data.data : [data.data]
  socials.value = arr.map((social: any) => ({
    id: social.id,
    name: social.name,
    platform: social.platform,
    url: social.url,
    icon: social.icon
  }))
})
</script>

<style lang="scss">
@import "@/assets/scss/_mixins.scss";

.socials {
  position: absolute;
  bottom: rem(70);

  display: flex;
  align-items: flex-start;
  gap: rem(22);

  @include mediaBigDesktop {
    bottom: big(70);

    gap: big(22);
  }

  @include mediaLaptop {
    bottom: rem(50);

    gap: rem(20);
  }

  @include mediaMobile {
    left: 50%;

    justify-content: center;

    transform: translateX(-50%);
  }

  &__link {
    display: flex;
    align-items: center;
    justify-content: center;

    transition: all var(--animation-default);

    &:hover {
      transform: scale(1.1);
    }
  }

  &__icon {
    width: rem(40);
    height: auto;

    filter: brightness(0) invert(1);

    @include mediaBigDesktop {
      width: big(40);
    }

    @include mediaLaptop {
      width: rem(40);
    }

    @include mediaTablet {
      width: rem(36);
    }

    @include mediaMobile {
      width: rem(32);
    }
  }
}

</style>