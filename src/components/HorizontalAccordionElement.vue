<template>
  <ul
    :class="['services__card', isOpen && 'active']"
    :id="id"
    @click="handleClick(id)"
  >
    <img
      class="services__background-image first-image"
      :src="`/horizontal-accordion/${image}`"
      alt="фоновая картинка"
    />
    <li class="services__card-content-wrapper">
      <p class="services__card-number">
        {{ number }}
      </p>
    </li>
    <li class="services__card-content-wrapper">
      <p :class="['services__card-title', isOpen && 'rotated']">
        {{ title }}
      </p>
    </li>
    <li class="services__card-content-wrapper">
      <p :class="['services__card-text', !isOpen && 'hidden']">
        {{ content }}
      </p>
    </li>
  </ul>
</template>
<script setup lang="ts">
defineProps<{
  id: string;
  image: string;
  number: string;
  title: string;
  content: string;
  handleClick: (id: string) => void;
  isOpen: boolean;
}>();
</script>
<style scoped>
.services__card {
  max-width: 115px;
  width: 100%;
  display: flex;
  flex-direction: column;
  list-style: none;
  margin: 0;
  padding: 0;
  position: relative;
  z-index: 3;
  /* gap: 48px; */
  padding: 32px 23px 32px 32px;
  cursor: pointer;
}
.active {
  max-width: 385px !important;
  align-items: flex-start;
}
.services__card-number {
  color: var(--White, #fff);
  font-family: Montserrat;
  font-size: 32px;
  font-style: normal;
  font-weight: 700;
  line-height: 120%; /* 38.4px */
}
.services__card-content-wrapper {
  display: flex;
  flex-direction: row;
  justify-content: center;
}
.services__card-title {
  color: var(--White, #fff);
  font-family: Montserrat;
  font-size: 24px;
  font-style: normal;
  font-weight: 600;
  line-height: 120%; /* 28.8px */
  padding: 48px 0;
  font-size: 20px;
  writing-mode: vertical-rl;
  text-align: left;
  max-height: 474px;
  max-width: 300px;
}
.services__card-text {
  color: var(--White, #fff);
  font-family: Montserrat;
  font-size: 15px;
  font-style: normal;
  font-weight: 500;
  line-height: 140%;
  white-space: pre-wrap; /* 22.5px */
}

.rotated {
  font-size: 24px;
  writing-mode: horizontal-tb;
}

.services__background-image {
  height: 100%;
  width: 100%;
  border-radius: 7px;
  position: absolute;
  top: 0;
  left: 0;
  z-index: -1;
  pointer-events: none;
  object-fit: cover;
  background-color: #010610;
  pointer-events: none;
}

.hidden {
  display: none !important;
}
@media (min-width: 1025px) and (max-width: 1279px) {
  .services__card-title {
    padding: 20px 0;
  }
}
@media (min-width: 768px) and (max-width: 1024px) {
}
@media (min-width: 375px) and (max-width: 767px) {
}
@media (min-width: 320px) and (max-width: 374px) {
}
</style>
