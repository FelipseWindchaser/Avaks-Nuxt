<template>
  <div class="services__accordion">
    <HorizontalAccordionElement
      v-for="element in elements"
      :id="element.id"
      :title="element.title"
      :image="element.image"
      :number="element.number"
      :content="element.content"
      :handleClick="handleClick"
      :isOpen="openedElement === element.id"
    />
  </div>
</template>
<script setup lang="ts">
defineProps<{
  elements: {
    id: string;
    title: string;
    image: string;
    number: string;
    content: string;
  }[];
}>();

const openedElement = ref("sc-1");
let autoSlideshow: any;
const handleClick = (id: string) => {
  openedElement.value = id;
  clearTimeout(autoSlideshow);
  autoSlideshow = setTimeout(() => {
    const [_, slideNumber] = id.split("-");
    if (!slideNumber) return;
    changeSlides(Number(slideNumber) > 4 ? 1 : Number(slideNumber) + 1);
  }, 10000);
};
const changeSlides = (slideNumber: number) => {
  openedElement.value = `sc-${slideNumber}`;
  autoSlideshow = setTimeout(() => {
    changeSlides(slideNumber > 4 ? 1 : slideNumber + 1);
  }, 5000);
};
onMounted(() => {
  changeSlides(1);
});
</script>
<style scoped>
.services__accordion {
  height: 548px;
  display: flex;
  flex-direction: row;
  max-width: 924px;
  width: 100%;
  gap: 20px;
}

@media (min-width: 768px) and (max-width: 1024px) {
  .services__accordion {
    display: none !important;
  }
}
@media (min-width: 375px) and (max-width: 767px) {
  .services__accordion {
    display: none !important;
  }
}
@media (min-width: 320px) and (max-width: 374px) {
  .services__accordion {
    display: none !important;
  }
}
</style>
