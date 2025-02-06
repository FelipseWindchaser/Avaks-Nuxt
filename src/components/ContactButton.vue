<template>
  <button class="contact-button" type="button" @click="openPopup">
    Связаться с нами
  </button>
</template>
<script setup lang="ts">
defineProps<{ openPopup: (event: any) => void }>();
</script>
<style scoped>
.contact-button {
  padding: 0;
  margin: 0;
  border: none;
  max-width: 270px;
  width: 100%;
  height: 59px;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 7px;
  background: var(--Blue, #325cc8);
  backdrop-filter: blur(4.650000095367432px);
  color: var(--White, #fff);
  font-family: Montserrat;
  font-size: 15px;
  font-style: normal;
  font-weight: 600;
  line-height: normal;
  cursor: pointer;
}
.contact-button:hover {
  opacity: 0.7;
}
@media (min-width: 768px) and (max-width: 1024px) {
}
@media (min-width: 375px) and (max-width: 767px) {
}
@media (min-width: 320px) and (max-width: 374px) {
}
</style>
