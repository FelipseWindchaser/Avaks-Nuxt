<template>
  <div class="our-products__slider">
    <swiper
      :observer="true"
      :observeParents="true"
      :slidesPerView="1"
      :speed="500"
      :modules="[Autoplay, Pagination]"
      :autoplay="true"
      :delay="5000"
      :disableOnInteraction="true"
      :pagination="{ clickable: true }"
      :spaceBetween="5"
      :breakpoints="{
        1024: {
          spaceBetween: 10,
        },
        1220: {
          spaceBetween: 20,
        },
      }"
      ><swiper-slide
        v-for="content in props.slideContent"
        class="our-products__slide"
      >
        <img
          class="our-products__slide-icon"
          :src="`/product-icons/${content.icon}`"
          alt="иконка"
        />
        <div class="our-products__slide-text-container">
          <p class="our-products__slide-title">{{ content.title }}</p>
          <p class="our-products__slide-text">
            {{ content.text }}
          </p>
        </div>
        <div class="our-products__pagination"></div>
      </swiper-slide>
    </swiper>
  </div>
</template>

<script setup lang="ts">
const props = defineProps<{
  slideContent: {
    icon: string;
    iconAlt: string;
    title: string;
    text: string;
    fullText: string;
  }[];
}>();
import { Swiper, SwiperSlide } from "swiper/vue";
import { Autoplay, Pagination } from "swiper/modules";
import "swiper/css/pagination";
</script>
<style scoped>
.our-products__slider {
  display: none;
  width: 100%;
  /* height: 544px; */
  position: relative;
  z-index: 3;
  --swiper-pagination-bullet-width: 16px;
  --swiper-pagination-bullet-height: 2px;
  --swiper-pagination-bullet-size: 12px;
  --swiper-pagination-bullet-border-radius: none;
  --swiper-pagination-bottom: 16px;
  --swiper-pagination-color: #d9deea;
  --swiper-pagination-bullet-inactive-color: #325cc8;
  --swiper-pagination-bullet-inactive-opacity: 1;
}

.our-products__slide {
  display: flex;
  flex-direction: column;
  background-color: #f1f2f5;
  border-radius: 7px;
  padding: 32px 34px 0;
  height: 320px;
  gap: 24px;
  cursor: grab;
}
.our-products__slide-icon {
  width: 82px;
  height: 82px;
}

.our-products__slide-text-container {
  display: flex;
  flex-direction: column;
  gap: 12px;
}
.our-products__slide-title {
  color: var(--Dark-Blue, #000c2a);
  font-family: Montserrat;
  font-size: 20px;
  font-style: normal;
  font-weight: 600;
  line-height: 120%; /* 24px */
}
.our-products__slide-text {
  color: var(--500, #465564);
  font-family: Montserrat;
  font-size: 18px;
  font-style: normal;
  font-weight: 500;
  line-height: 24px; /* 133.333% */
  letter-spacing: 0.036px;
}
@media (min-width: 768px) and (max-width: 1023px) {
  .our-products__slider {
    display: block;
  }
}
@media (min-width: 540px) and (max-width: 767px) {
  .our-products__slider {
    display: block;
  }
  .our-products__slide {
    display: flex;
    flex-direction: column;
    background-color: #f1f2f5;
    border-radius: 7px;
    padding: 32px 34px 0;
    height: 400px;
    gap: 24px;
    cursor: grab;
  }
}
@media (min-width: 375px) and (max-width: 539px) {
  .our-products__slider {
    display: block;
  }
  .our-products__slide {
    display: flex;
    flex-direction: column;
    background-color: #f1f2f5;
    border-radius: 7px;
    padding: 32px 34px 0;
    height: 440px;
    gap: 24px;
    cursor: grab;
  }
  .our-products__slide-icon {
    width: 60px;
    height: 60px;
    align-self: center;
  }
}
@media (min-width: 320px) and (max-width: 374px) {
  .our-products__slider {
    display: block;
  }
  .our-products__slide {
    display: flex;
    flex-direction: column;
    background-color: #f1f2f5;
    border-radius: 7px;
    padding: 30px 20px 0;
    height: 460px;
    gap: 24px;
    cursor: grab;
  }
  .our-products__slide-icon {
    width: 60px;
    height: 60px;
    align-self: center;
  }
}
</style>
