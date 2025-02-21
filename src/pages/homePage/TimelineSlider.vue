<template>
  <div class="timeline__slider">
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
        class="timeline__slide"
      >
        <img
          class="timeline__slide-background"
          :src="`/timeline-slider/${content.image}`"
          alt="фоновая картинка"
        />
        <div class="timeline__slide-text-container">
          <p class="timeline__slide-title">{{ content.title }}</p>
          <p class="timeline__slide-text">
            {{ content.text }}
          </p>
        </div>
        <div class="timeline__pagination"></div>
      </swiper-slide>
    </swiper>
  </div>
</template>
<script setup lang="ts">
const props = defineProps<{
  slideContent: {
    image: string;
    title: string;
    text: string;
  }[];
}>();
import { Swiper, SwiperSlide } from "swiper/vue";
import { Autoplay, Pagination } from "swiper/modules";
import "swiper/css/pagination";
</script>
<style scoped>
.timeline__slider {
  width: 100%;
  /* height: 544px; */
  position: relative;
  z-index: 3;
  --swiper-pagination-bullet-width: 16px;
  --swiper-pagination-bullet-height: 2px;
  --swiper-pagination-bullet-size: 12px;
  --swiper-pagination-bullet-border-radius: none;
  --swiper-pagination-bottom: 26px;
  --swiper-pagination-color: #fff;
  --swiper-pagination-bullet-inactive-color: #52708f;
  --swiper-pagination-bullet-inactive-opacity: 1;
}
.timeline__slide {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  position: relative;
  cursor: grab;
  height: 544px;
}
.timeline__slide-background {
  position: absolute;
  width: 100%;
  max-height: 544px;
  height: 100%;
  pointer-events: none;
  z-index: -1;
}

.timeline__slide-text-container {
  display: flex;
  flex-direction: column;
  align-items: center;
  max-width: 465px;
  /* padding-top: 92px; */
}
.timeline__slide-title {
  color: #fff;
  text-align: center;
  font-family: Montserrat;
  font-size: 168px;
  font-style: normal;
  font-weight: 700;
  line-height: normal;
}
.timeline__slide-text {
  color: var(--White, #fff);
  text-align: center;
  font-family: Montserrat;
  font-size: 18px;
  font-style: normal;
  font-weight: 500;
  line-height: 140%; /* 25.2px */
  letter-spacing: 0.036px;
}
@media (min-width: 768px) and (max-width: 1024px) {
}
@media (min-width: 540px) and (max-width: 767px) {
  .timeline__slide-text-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    max-width: 530px;
    padding: 20px 20px 0;
  }
  .timeline__slide {
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    align-items: center;
    position: relative;
    cursor: grab;
    max-height: 336px;
  }
  .timeline__slide-title {
    font-size: 107.292px;
  }
  .timeline__slide-text {
    font-size: 16px;
  }
}
@media (min-width: 320px) and (max-width: 539px) {
  .timeline__slider {
    --swiper-pagination-bottom: 12px;
  }
  .timeline__slide-text-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    max-width: 530px;
    padding: 20px 20px 0;
  }
  .timeline__slide {
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    align-items: center;
    position: relative;
    cursor: grab;
    max-height: 336px;
  }
  .timeline__slide-title {
    font-size: 90px;
  }
  .timeline__slide-text {
    font-size: 15px;
    line-height: 120%;
  }
}
</style>
