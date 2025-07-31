<template>
  <section class="advantages">
    <h2 class="advantages__title">Наши преимущества</h2>
    <div class="advantages__cards">
      <div v-for="content in cardContent" class="advantages__card">
        <img
          class="advantages__card-image"
          :src="`advantages/${content.image}`"
          :alt="`цифра ${content.imageAlt}`"
        />
        <p class="advantages__card-text">{{ content.text }}</p>
      </div>
    </div>
    <AdvantagesSlider :cardContent="cardContent" />
  </section>
</template>
<script setup lang="ts">
defineProps<{}>();
const cardContent = [
  {
    image: "1.svg",
    imageAlt: "один",
    number: 1,
    text: "Собственный склад в Москве",
  },
  {
    image: "2.svg",
    imageAlt: "два",
    number: 2,
    text: "Персональный менеджер для работы с партнерами",
  },
  {
    image: "3.svg",
    imageAlt: "три",
    number: 3,
    text: "Организация автоматического обмена данными",
  },
  {
    image: "4.svg",
    imageAlt: "четыре",
    number: 4,
    text: "Оперативная логистика",
  },
  {
    image: "5.svg",
    imageAlt: "пять",
    number: 5,
    text: "Интерфейс для быстрой обработки заказов",
  },
  {
    image: "6.svg",
    imageAlt: "шесть",
    number: 6,
    text: "Хорошая деловая репутация",
  },
];
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
  background: url(/advantages/advantages-1920.jpg) white 50% / cover no-repeat;
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

@media (min-width: 1024px) and (max-width: 1279px) {
  .advantages {
    width: 100%;
    padding: 80px 60px;
  }
  .advantages__cards {
    max-width: 1303px;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 73px 121px;
    justify-content: space-between;
  }
}
@media (min-width: 768px) and (max-width: 1023px) {
  .advantages {
    gap: 0;
    padding: 74px 80px 20px;
  }
  .advantages__cards {
    display: none;
  }
  .advantages__title {
    font-size: 28px;
  }
}
@media (min-width: 700px) and (max-width: 767px) {
  .advantages {
    gap: 0;
    padding: 74px 80px 20px;
  }
  .advantages__cards {
    display: none;
  }
}
@media (min-width: 320px) and (max-width: 699px) {
  .advantages {
    gap: 0;
    padding: 60px 20px 20px;
  }
  .advantages__title {
    font-size: 28px;
  }
  .advantages__cards {
    display: none;
  }
}
</style>
