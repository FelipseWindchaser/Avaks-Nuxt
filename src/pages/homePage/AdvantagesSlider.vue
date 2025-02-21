<template>
  <div class="advantages__slider slider_pc">
    <swiper
      :observer="true"
      :observeParents="true"
      :slidesPerView="1"
      :slidesPerGroup="2"
      :speed="500"
      :modules="[Autoplay, Pagination]"
      :autoplay="true"
      :delay="5000"
      :disableOnInteraction="true"
      :pagination="{ clickable: true }"
      :spaceBetween="5"
      :loop="true"
      :loopAddBlankSlides="true"
      :breakpoints="{
        700: {
          spaceBetween: 10,
          slidesPerView: 2,
        },
        1023: {
          spaceBetween: 10,
          slidesPerView: 2,
        },
      }"
    >
      <swiper-slide
        v-for="сontent in props.cardContent"
        class="advantages__slide"
      >
        <div class="advantages__slide-text-container">
          <p class="advantages__slide-number">
            {{ сontent.number }}
          </p>
          <p class="advantages__slide-text">
            {{ сontent.text }}
          </p>
        </div>
      </swiper-slide>
    </swiper>
  </div>
  <div class="advantages__slider slider_mob">
    <swiper
      :observer="true"
      :observeParents="true"
      :slidesPerView="1"
      :slidesPerGroup="1"
      :speed="500"
      :modules="[Autoplay, Pagination]"
      :autoplay="true"
      :delay="5000"
      :disableOnInteraction="true"
      :pagination="{ clickable: true }"
      :spaceBetween="5"
      :loop="true"
      :loopAddBlankSlides="true"
    >
      <swiper-slide
        v-for="chunkedContent in chunkedData()"
        class="advantages__slide"
      >
        <div>
          <div
            v-for="сontent in chunkedContent"
            class="advantages__slide-text-container"
          >
            <p class="advantages__slide-number">
              {{ сontent.number }}
            </p>
            <p class="advantages__slide-text">
              {{ сontent.text }}
            </p>
          </div>
        </div>
      </swiper-slide>
    </swiper>
  </div>
</template>

<script setup lang="ts">
const props = defineProps<{
  mobCardContent?: {
    items: {
      number: number;
      text: string;
    }[];
  }[];
  cardContent: {
    image?: string;
    imageAlt?: string;
    number: number;
    text: string;
  }[];
}>();

console.log(props.cardContent);
import { Swiper, SwiperSlide } from "swiper/vue";
import { Autoplay, Pagination } from "swiper/modules";
import "swiper/css/pagination";

const chunkedData = () => {
  const chunkSize = 3;
  const chunks = [];
  for (let i = 0; i < props.cardContent.length; i += chunkSize) {
    chunks.push(props.cardContent.slice(i, i + chunkSize));
  }
  return chunks;
};
</script>
<style scoped>
.advantages__slider {
  display: none;
  width: 100%;
  position: relative;
  z-index: 3;
  --swiper-pagination-bullet-width: 16px;
  --swiper-pagination-bullet-height: 2px;
  --swiper-pagination-bullet-size: 12px;
  --swiper-pagination-bullet-border-radius: none;
  --swiper-pagination-bottom: 0;
  --swiper-pagination-color: #d9deea;
  --swiper-pagination-bullet-inactive-color: #325cc8;
  --swiper-pagination-bullet-inactive-opacity: 1;
}
.advantages__slider_mob {
  display: none;
  width: 100%;
  position: relative;
  z-index: 3;
  --swiper-pagination-bullet-width: 16px;
  --swiper-pagination-bullet-height: 2px;
  --swiper-pagination-bullet-size: 12px;
  --swiper-pagination-bullet-border-radius: none;
  --swiper-pagination-bottom: 0;
  --swiper-pagination-color: #d9deea;
  --swiper-pagination-bullet-inactive-color: #325cc8;
  --swiper-pagination-bullet-inactive-opacity: 1;
}
.advantages__slide {
  display: flex;
  flex-direction: row;
  justify-content: center;
  background: none;
  border-radius: 7px;
  height: 181px;
  gap: 75px;
  cursor: grab;
}

.advantages__slide-number {
  color: #fff;
  font-family: "Open Sans";
  font-size: 90px;
  font-style: italic;
  font-weight: 800;
  line-height: 140%;
  letter-spacing: 0.18px;
  opacity: 0.44;
}
.advantages__slide-text-container {
  display: flex;
  flex-direction: row;
  gap: 30px;
  align-items: center;
  max-width: 300px;
}
.advantages__slide-title {
  color: var(--Dark-Blue, #000c2a);
  font-family: Montserrat;
  font-size: 20px;
  font-style: normal;
  font-weight: 600;
  line-height: 120%; /* 24px */
}
.advantages__slide-text {
  color: #fff;
  font-family: Montserrat;
  font-size: 18px;
  font-style: normal;
  font-weight: 500;
  line-height: 140%; /* 25.2px */
  letter-spacing: 0.036px;
}
.swiper-pagination {
  position: static !important;
}
@media (min-width: 700px) and (max-width: 1023px) {
  .advantages__slider {
    display: block;
  }

  .slider_mob {
    display: none !important;
  }
}
@media (min-width: 320px) and (max-width: 699px) {
  .advantages__slider {
    display: block;
  }
  .advantages__slide {
    height: 440px;
    align-items: center;
  }
  .slider_pc {
    display: none !important;
  }
}
</style>
