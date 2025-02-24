<template>
  <swiper
    class="marquee-swiper"
    :modules="[Autoplay]"
    :observer="true"
    :loop="true"
    :observeParents="true"
    :slidesPerView="4"
    :spaceBetween="100"
    :speed="3000"
    :autoplay="{
      delay: 0,
      disableOnInteraction: false,
    }"
    :on="{}"
    :breakpoints="{
      1024: {
        slidesPerView: 3,
      },
      1441: {
        slidesPerView: 4,
      },
    }"
  >
    <swiper-slide v-for="chunkedContent in chunkedData()" class="carousel">
      <div v-for="сontent in chunkedContent" class="marquee-slide">
        <img
          class="carousel-image"
          :src="`${сontent.image}`"
          :alt="`${сontent.alt}`"
        />
      </div>
    </swiper-slide>
  </swiper>
</template>
<script setup lang="ts">
import { Swiper, SwiperSlide } from "swiper/vue";
import { Autoplay } from "swiper/modules";
const props = defineProps<{
  carouselContent: {
    image: string;
    alt: string;
  }[];
}>();
const chunkedData = () => {
  const chunkSize = 1;
  const chunks = [];
  for (let i = 0; i < props.carouselContent.length; i += chunkSize) {
    chunks.push(props.carouselContent.slice(i, i + chunkSize));
  }
  return chunks;
};
</script>
<style scoped>
.marquee-swiper {
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: space-between;
  /* gap: 193px; */
  width: 100%;
  overflow: hidden;
  min-height: 66px;
  position: relative;
  /* cursor: grab; */
  pointer-events: none;
}

.marquee-slide {
  min-width: 255px;
  min-height: 66px;
  display: flex;
  align-items: center;
  /* justify-content: center; */
}
.carousel-image {
  max-width: 255px;
  max-height: 66px;
}

@media (min-width: 320px) and (max-width: 1023px) {
  .marquee-swiper {
    display: none;
  }
}
</style>
