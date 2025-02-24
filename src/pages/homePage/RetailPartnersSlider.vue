<template>
  <!-- <div class="retail-partners__slider slider_pc">
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
        class="retail-partners__slide"
      >
        <div class="retail-partners__slide-text-container">
          <p class="retail-partners__slide-number">
            {{ сontent.number }}
          </p>
          <p class="retail-partners__slide-text">
            {{ сontent.text }}
          </p>
        </div>
      </swiper-slide>
    </swiper>
  </div> -->
  <div class="retail-partners__slider slider_pc">
    <swiper
      :observer="true"
      :observeParents="true"
      :slidesPerView="2"
      :slidesPerGroup="1"
      :speed="500"
      :modules="[Autoplay, Pagination]"
      :autoplay="false"
      :delay="5000"
      :disableOnInteraction="true"
      :pagination="{ clickable: true }"
      :spaceBetween="5"
      :loop="true"
      :loopAddBlankSlides="true"
    >
      <swiper-slide
        v-for="chunkedContent in chunkedData()"
        class="retail-partners__slide"
      >
        <div>
          <div
            v-for="сontent in chunkedContent"
            class="retail-partners__slide-container"
          >
            <img
              class="retail-partners__slide-logo"
              :src="`/retail-partners-slider/${сontent.image}`"
              :alt="`${сontent.alt}`"
            />
          </div>
        </div>
      </swiper-slide>
    </swiper>
  </div>
  <div class="retail-partners__slider slider_mob">
    <swiper
      :observer="true"
      :observeParents="true"
      :slidesPerView="1"
      :slidesPerGroup="1"
      :speed="500"
      :modules="[Autoplay, Pagination]"
      :autoplay="false"
      :delay="5000"
      :disableOnInteraction="true"
      :pagination="{ clickable: true }"
      :spaceBetween="5"
      :loop="true"
      :loopAddBlankSlides="true"
    >
      <swiper-slide
        v-for="chunkedContent in chunkedDataMob()"
        class="retail-partners__slide"
      >
        <div>
          <div
            v-for="сontent in chunkedContent"
            class="retail-partners__slide-container"
          >
            <img
              class="retail-partners__slide-logo"
              :src="`/retail-partners-slider/${сontent.image}`"
              :alt="`${сontent.alt}`"
            />
          </div>
        </div>
      </swiper-slide>
    </swiper>
  </div>
</template>

<script setup lang="ts">
const props = defineProps<{
  content: {
    image: string;
    alt: string;
    index?: number;
  }[];
}>();

// console.log(props.content);
import { Swiper, SwiperSlide } from "swiper/vue";
import { Autoplay, Pagination } from "swiper/modules";
import "swiper/css/pagination";

const chunkedData = () => {
  const chunkSize = 3;
  const chunks = [];
  for (let i = 0; i < props.content.length; i += chunkSize) {
    chunks.push(props.content.slice(i, i + chunkSize));
  }
  return chunks;
};
const chunkedDataMob = () => {
  const chunkSize = 6;
  const chunks = [];
  for (let i = 0; i < props.content.length; i += chunkSize) {
    chunks.push(props.content.slice(i, i + chunkSize));
  }
  return chunks;
};
</script>
<style scoped>
.retail-partners__slider {
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

.retail-partners__slide {
  cursor: grab;
  padding-bottom: 20px;
}
.retail-partners__slide-container {
  min-width: 255px;
  min-height: 66px;
  display: flex;
  align-items: center;
  justify-content: center;
  padding-bottom: 20px;
}
.retail-partners__slide-logo {
  max-width: 255px;
  height: 66px;
  object-fit: contain;
}
/* .swiper-pagination {
  position: static !important;
} */
@media (min-width: 700px) and (max-width: 1023px) {
  .retail-partners__slider {
    display: block;
  }
  .swiper-wrapper {
    align-items: center;
  }
  .slider_mob {
    display: none !important;
  }
}
@media (min-width: 320px) and (max-width: 699px) {
  .retail-partners__slider {
    display: block;
  }
  .retail-partners__slide {
    /* height: 440px; */
    align-items: center;
  }

  .slider_pc {
    display: none !important;
  }
}
</style>
