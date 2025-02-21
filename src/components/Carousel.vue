<template>
  <!-- <swiper
    :observer="true"
    :observeParents="true"
    :slidesPerView="4"
    :modules="[Autoplay]"
    :speed="4000"
    :loop="true"
    :loopPreventsSliding="true"
    :freeMode="true"
    :autoplay="true"
    :delay="0"
    :disableOnInteraction="false"
    :grabCursor="true"
    :spaceBetween="5"
    :breakpoints="{
      1024: {
        spaceBetween: 10,
      },
      1220: {
        spaceBetween: 20,
      },
    }"
    v-if="!reversed"
    class="carousel"
  > -->
  <div v-if="!reversed" class="carousel">
    <div
      v-for="element in carouselContent"
      :class="`carousel-slide carousel-slide-${element.index}`"
    >
      <img
        class="carousel-image"
        :src="`/our-partners-carousel/${element.image}`"
        :alt="`${element.alt}`"
      />
    </div>
  </div>

  <!-- </swiper> -->
  <div v-else-if="reversed" class="carousel_reversed">
    <div v-for="element in reversedCarouselContent" class="carousel-slide">
      <img
        class="carousel-image"
        :src="`/our-partners-carousel_reversed/${element.image}`"
        :alt="`${element.alt}`"
      />
    </div>
  </div>
</template>
<script setup lang="ts">
defineProps<{
  reversed?: boolean;
  carouselContent?: {
    image: string;
    alt: string;
    index: number;
  }[];
  reversedCarouselContent?: {
    image: string;
    alt: string;
    // index: number;
  }[];
}>();
import { Swiper, SwiperSlide } from "swiper/vue";
import { Autoplay } from "swiper/modules";
</script>
<style scoped>
.carousel {
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: space-between;
  gap: 193px;
  width: 100%;
  overflow: hidden;
  min-height: 66px;
  /* border: 1px solid black; */
  position: relative;
  /* margin-inline: auto; */
}

/* .swiper {
  transition-duration: 4000 !important;
  transition-timing-function: linear !important;
  --swiper-wrapper-transition-timing-function: linear !important;
}
.swiper-wrapper {
  transition-duration: 4000 !important;
  transition-timing-function: linear !important;
  --swiper-wrapper-transition-timing-function: linear !important;
} */
.carousel_reversed {
  display: flex;
  flex-direction: row;
  align-items: center;
  gap: 193px;
  width: 100%;
  overflow: hidden;
  min-height: 66px;
}
.carousel-slide {
  min-width: 255px;
  min-height: 66px;
  display: flex;
  align-items: center;
  justify-content: center;
  /* position: absolute;
  left: 0%; */

  /* animation: scrollToLeft 30s linear infinite; */
  /* animation: scroll 3s linear infinite; */
}
.carousel-image {
  max-width: 255px;
  max-height: 66px;
}

/* .carousel-slide-1 {
  animation-delay: calc(30s / 9 * (9 - 1) * -1);
}
.carousel-slide-2 {
  animation-delay: calc(30s / 9 * (9 - 2) * -1);
}
.carousel-slide-3 {
  animation-delay: calc(30s / 9 * (9 - 3) * -1);
}
.carousel-slide-4 {
  animation-delay: calc(30s / 9 * (9 - 4) * -1);
}
.carousel-slide-5 {
  animation-delay: calc(30s / 9 * (9 - 5) * -1);
}
.carousel-slide-6 {
  animation-delay: calc(30s / 9 * (9 - 6) * -1);
}
.carousel-slide-7 {
  animation-delay: calc(30s / 9 * (9 - 7) * -1);
}
.carousel-slide-8 {
  animation-delay: calc(30s / 9 * (9 - 8) * -1);
}
.carousel-slide-9 {
  animation-delay: calc(30s / 9 * (9 - 9) * -1);
} */

/* @keyframes scrollToLeft {
  to {
    left: -2000%;
  }
} */

/* @keyframes scroll {
  to {
    transform: translateX(calc(-200% - 193px));
  }
} */

@media (min-width: 768px) and (max-width: 1024px) {
}
@media (min-width: 375px) and (max-width: 767px) {
}
@media (min-width: 320px) and (max-width: 374px) {
}
</style>
