<template>
  <section class="advantages">
    <h2 class="advantages__title">Наши преимущества</h2>
    <div class="advantages__cards">
      <div class="advantages__card">
        <img
          class="advantages__card-image"
          src="../../../static/img/homepage/advantages/1.svg"
          alt="цифра_один"
        />
        <p class="advantages__card-text">Собственный склад в Москве</p>
      </div>
      <div class="advantages__card">
        <img
          class="advantages__card-image"
          src="../../../static/img/homepage/advantages/2.svg"
          alt="цифра_два"
        />
        <p class="advantages__card-text">
          Персональный менеджер для работы с партнерами
        </p>
      </div>
      <div class="advantages__card">
        <img
          class="advantages__card-image"
          src="../../../static/img/homepage/advantages/3.svg"
          alt="цифра_три"
        />
        <p class="advantages__card-text">
          Организация автоматического обмена данными
        </p>
      </div>
      <div class="advantages__card">
        <img
          class="advantages__card-image"
          src="../../../static/img/homepage/advantages/4.svg"
          alt="цифра_четыре"
        />
        <p class="advantages__card-text">Оперативная логистика</p>
      </div>
      <div class="advantages__card">
        <img
          class="advantages__card-image"
          src="../../../static/img/homepage/advantages/5.svg"
          alt="цифра_пять"
        />
        <p class="advantages__card-text">
          Интерфейс для быстрой обработки заказов
        </p>
      </div>
      <div class="advantages__card">
        <img
          class="advantages__card-image"
          src="../../../static/img/homepage/advantages/6.svg"
          alt="цифра_шесть"
        />
        <p class="advantages__card-text">
          Холдинговая структура. Хорошая деловая репутация
        </p>
      </div>
    </div>
  </section>
</template>
<script setup lang="ts">
defineProps<{}>();
</script>
<style scoped>
.advantages {
  width: 100%;
  padding: 100px;
  gap: 73px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  background: url(../../../static/img/homepage/advantages/advantages-1920.jpg)
    white 50% / cover no-repeat;
}
.advantages__title {
  color: #fff;
  text-align: center;
  font-family: Montserrat;
  font-size: 36px;
  font-style: normal;
  font-weight: 600;
  line-height: normal;
}
.advantages__cards {
  max-width: 1303px;
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  gap: 73px 121px;
  justify-content: space-between;
}
.advantages__card {
  display: flex;
  flex-direction: row;
  align-items: center;
  gap: 30px;
}

.advantages__card-text {
  color: #fff;
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
