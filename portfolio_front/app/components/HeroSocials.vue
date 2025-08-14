<template>
  <div class="socials">
    <a
      v-for="social in socials"
      :key="social.name"
      :href="social.url"
      class="socials__link"
      target="_blank"
      rel="noopener noreferrer"
      :aria-label="social.name"
    >
      <img :src="social.icon" :alt="social.name" class="socials__icon" />
    </a>
  </div>
</template>

<script setup>
const socials = [
  {
    name: 'LinkedIn',
    url: 'https://www.linkedin.com/in/alexei-kruk/',
    icon: '/images/icons/linkedin.svg',
  },
  {
    name: 'Facebook',
    url: 'https://www.facebook.com/alexeikruk28',
    icon: '/images/icons/facebook.svg',
  },
  {
    name: 'Instagram',
    url: 'https://www.instagram.com/alexei_kruk/',
    icon: '/images/icons/instagram.svg',
  },
  {
    name: 'Telegram',
    url: 'https://t.me/AlexeiKruk',
    icon: '/images/icons/telegram.svg',
  },
  {
    name: 'WhatsApp',
    url: 'https://wa.me/375295744458',
    icon: '/images/icons/whatsapp.svg',
  },
  {
    name: 'Mail',
    url: 'mailto:alexei.kruk.dev@gmail.com',
    icon: '/images/icons/mail.svg',
  },
];
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