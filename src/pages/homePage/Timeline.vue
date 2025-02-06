<template>
  <section class="timeline">
    <div class="timeline__slider">
      <div class="timeline__slide">
        <div class="timeline__slide-background"></div>
        <div class="timeline__slide-text-container">
          <p class="timeline__slide-title">2015</p>
          <p class="timeline__slide-text">
            Стартовал блок розничных продаж. На тот момент AVAKS был еще совсем
            небольшим локальным игроком на рынке гаджетов и бытовой техники.
          </p>
        </div>
      </div>
      <div class="timeline__pagination"></div>
    </div>
  </section>
</template>
<script setup lang="ts">
defineProps<{}>();
</script>
<style scoped>
.timeline {
  width: 100%;
  height: 544px;
  position: relative;
}
.timeline__slide {
  display: flex;
  flex-direction: column;
  /* justify-content: center; */
  align-items: center;
}
.timeline__slide-background {
  background: url(../../../static/img/homepage/timeline-slider/1.jpg) white 50% /
    cover no-repeat;
  object-fit: cover;
  width: 100%;
  height: 100%;
  position: absolute;
  z-index: -1;
  top: 0;
  left: 0;
}
.timeline__slide-text-container {
  display: flex;
  flex-direction: column;
  align-items: center;
  max-width: 465px;
  padding-top: 92px;
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
@media (min-width: 375px) and (max-width: 767px) {
}
@media (min-width: 320px) and (max-width: 374px) {
}
</style>
