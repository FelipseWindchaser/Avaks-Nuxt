<template>
  <div class="services__slider">
    <swiper
      :observer="true"
      :observeParents="true"
      :slidesPerView="1"
      :speed="500"
      :modules="[Autoplay, Pagination]"
      :autoplay="false"
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
        class="services__slide"
      >
        <img
          class="services__slide-background"
          :src="`/horizontal-accordion/${content.image}`"
          alt="фоновая картинка"
        />
        <div class="services__slide-text-container">
          <p class="services__slide-number">{{ content.number }}</p>
          <p class="services__slide-title">{{ content.title }}</p>
          <p class="services__slide-text">
            {{ content.content }}
          </p>
        </div>
        <div class="services__pagination"></div>
      </swiper-slide>
    </swiper>
  </div>
</template>
<script setup lang="ts">
const props = defineProps<{
  slideContent: {
    id?: string;
    image: string;
    number: string;
    title: string;
    content: string;
  }[];
}>();
import { Swiper, SwiperSlide } from "swiper/vue";
import { Autoplay, Pagination } from "swiper/modules";
import "swiper/css/pagination";
</script>
<style scoped>
.services__slider {
  display: none;
  border-radius: 7px;
  width: 100%;
  /* height: 544px; */
  position: relative;
  z-index: 3;
  background-color: #010610;
  --swiper-pagination-bullet-width: 16px;
  --swiper-pagination-bullet-height: 2px;
  --swiper-pagination-bullet-size: 12px;
  --swiper-pagination-bullet-border-radius: none;
  --swiper-pagination-bottom: 26px;
  --swiper-pagination-color: #fff;
  --swiper-pagination-bullet-inactive-color: #52708f;
  --swiper-pagination-bullet-inactive-opacity: 1;
}
.swiper {
  border-radius: 7px;
}
.services__slide {
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  align-items: flex-start;
  position: relative;
  cursor: grab;
  /* height: 420px; */
}
.services__slide-background {
  position: absolute;
  width: 100%;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  pointer-events: none;
  z-index: -1;
}
.services__slide-number {
  color: var(--White, #fff);
  font-family: Montserrat;
  font-size: 32px;
  font-style: normal;
  font-weight: 700;
  line-height: 120%; /* 38.4px */
}
.services__slide-text-container {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  width: 100%;
  padding: 39px 33px 56px;
  /* padding-top: 92px; */
}
.services__slide-title {
  color: var(--White, #fff);
  font-family: Montserrat;
  font-size: 24px;
  font-style: normal;
  font-weight: 600;
  line-height: 120%;
}
.services__slide-text {
  color: var(--White, #fff);
  text-align: left;
  font-family: Montserrat;
  font-size: 18px;
  font-style: normal;
  font-weight: 500;
  line-height: 140%; /* 25.2px */
  letter-spacing: 0.036px;
  white-space: pre-wrap;
  /* max-width: 800px; */
  width: 100%;
}

@media (min-width: 768px) and (max-width: 1024px) {
  .services__slider {
    display: block;
  }
  .services__slide-number {
    padding-bottom: 30px;
  }
  .services__slide-title {
    padding-bottom: 30px;
  }
  .services__slide-text {
    font-size: 15px;
  }
}
@media (min-width: 375px) and (max-width: 767px) {
  .services__slider {
    display: block;
  }
  .services__slide-number {
    padding-bottom: 30px;
  }
  .services__slide {
    /* height: 572px; */
  }
}
@media (min-width: 375px) and (max-width: 767px) {
  .services__slider {
    display: block;
  }
  .services__slide-number {
    padding-bottom: 30px;
  }
  .services__slide {
    /* height: 572px; */
  }
  .services__slide-title {
    padding-bottom: 30px;
  }
  .services__slide-text {
    font-size: 15px;
  }
}
@media (min-width: 320px) and (max-width: 374px) {
  .services__slider {
    display: block;
  }
  .services__slide-number {
    padding-bottom: 30px;
  }
  .services__slide {
    /* height: 572px; */
  }
  .services__slide-title {
    padding-bottom: 30px;
  }
  .services__slide-text {
    font-size: 15px;
  }
}
</style>
