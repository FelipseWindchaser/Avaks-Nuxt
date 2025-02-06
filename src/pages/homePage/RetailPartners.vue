<template>
  <section class="retail-partners">
    <div class="retail-partners__text-container">
      <h2 class="retail-partners__title">Наши партнеры в retail</h2>
      <p class="retail-partners__description">
        Мы работаем с сильными компаниями в российском ритейле. Наша модель
        сотрудничества — плотная интеграция в бизнес-процессы контрагента для
        достижения максимальной взаимной эффективности. <br />Таким образом мы
        достигаем высокие показатели продаж по sell-out.
      </p>
    </div>
    <div class="retail-partners__carousel">
      <div class="retail-partners__carousel-image-container">
        <img class="retail-partners__carousel-image" />
      </div>
    </div>
  </section>
</template>
<script setup lang="ts">
defineProps<{}>();
</script>
<style scoped>
.retail-partners {
  width: 100%;
  padding: 100px 160px;
  display: flex;
  flex-direction: column;
  gap: 100px;
}
.retail-partners__text-container {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
}
.retail-partners__title {
  max-width: 312px;
  color: var(--Color-Brand-black, #000);
  font-family: Montserrat;
  font-size: 36px;
  font-style: normal;
  font-weight: 600;
  line-height: normal;
}
.retail-partners__description {
  max-width: 679px;
  color: var(--500, #465564);
  font-family: Montserrat;
  font-size: 18px;
  font-style: normal;
  font-weight: 500;
  line-height: 140%;
}
@media (min-width: 768px) and (max-width: 1024px) {
}
@media (min-width: 375px) and (max-width: 767px) {
}
@media (min-width: 320px) and (max-width: 374px) {
}
</style>
