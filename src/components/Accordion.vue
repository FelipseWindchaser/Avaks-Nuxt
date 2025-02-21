<template>
  <div class="accordion" id="accordion">
    <AccordionElement
      v-for="element in elements"
      :id="element.id"
      :title="element.title"
      :content="element.content"
      :handleClick="handleClick"
      :isOpen="computedOpenedElement === element.id"
    >
    </AccordionElement>
  </div>
</template>

<script setup lang="ts">
import { ref, computed } from "vue";

const props = defineProps<{
  elements: {
    id: string;
    title: string;
    content: string;
  }[];
  defaultOpenedElementId?: string;
}>();
// console.log(props);

const openedElement = ref(props.defaultOpenedElementId);
const computedOpenedElement = computed(() => {
  return openedElement.value;
});

const handleClick = (id: string) => {
  openedElement.value = openedElement.value === id ? undefined : id;
  console.log(openedElement.value);
};
</script>
<style scoped>
.accordion {
  display: flex;
  flex-direction: column;
  width: 100%;
}

@media (min-width: 768px) and (max-width: 1023px) {
}
@media (min-width: 375px) and (max-width: 767px) {
}
@media (min-width: 320px) and (max-width: 374px) {
}
</style>
