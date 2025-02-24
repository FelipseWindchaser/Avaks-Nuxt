<template>
  <section class="services" id="services">
    <div class="services__text-container">
      <h2 class="services__title">Открываем новые горизонты в дистрибуции</h2>
      <p class="services__text">
        Холдинг AVAKS уверенно занимает свою нишу на рынке дистрибуции,
        фокусируясь на инновационных продуктах. Мы активно сотрудничаем с
        федеральными сетями, специализированными магазинами и крупнейшими
        онлайн-платформами в РФ, а также расширяем партнерство в странах ЕАЭС.
      </p>
      <p class="services__text">
        Наша специализация — тщательная и эффективная адаптация товаров для
        российского рынка, предоставляя комплексное обслуживание и поддержку
        продаж на всех этапах.
      </p>
      <p class="services__text">
        Наше преимущество заключается не только в широком ассортименте, но и в
        глубоком понимании технологий, что позволяет нам предлагать рынку самые
        актуальные и востребованные продукты.
      </p>
    </div>
    <HorizontalAccordion :elements="elements" />
    <ServicesSlider :slideContent="elements" />
  </section>
</template>
<script setup lang="ts">
const elements = [
  {
    id: "sc-1",
    image: "full-1.png",
    number: "01.",
    title: "Выделенная поддержка",
    content: `Для каждого партнера выделен индивидуальный менеджер для удобства решения всех вопросов.\n\nДетальное погружение в специфику бизнеса дает менеджеру возможность оперативно и точно реагировать на запросы партнеров.`,
  },
  {
    id: "sc-2",
    image: "full-2.jpg",
    number: "02.",
    title: "Федеральный офф-лайн и он-лайн",
    content: `В рамках развития дистрибуторского направления, мы работаем с ключевыми партнерами, федеральными торговыми сетями, а также ведущими игроками ecom-рынка.\n\nВ фокусе внимания - партнеры с высокотехнологичными площадками, которые обеспечивают как широкий охват ЦА, так и высокий уровень коммерческой и поведенческой аналитики.`,
  },
  {
    id: "sc-3",
    image: "full-3.jpg",
    number: "03.",
    title: "Высокая экспертиза в оффлайн и digital маркетинге",
    content: `Мы умеем создавать спрос на новые продукты, используем широкий спектр рекламных инструментов: контекстная реклама, телевидение, социальные сети, лидеры мнений.\n\nДля поддержания устойчивого спроса на товары наших брендов мы активно участвуем в значимых федеральных промо, осуществляем  эффективную маркетинговую поддержку с индивидуальным подходом к каждому партнеру.`,
  },
  {
    id: "sc-4",
    image: "full-4.jpg",
    number: "04.",
    title: "Построение дистрибуции и технологий обеспечения продаж",
    content: `Применяем технологии для поддержания оптимальных товарных остатков, фокусируемся на sell-out наших партнеров.\n\nПредоставляем необходимые контент материалы для продвижения товаров и онлайн поддержку по товару (спецификация, особенности эксплуатации).\n\nОбеспечиваем оперативную логистику.`,
  },
  {
    id: "sc-5",
    image: "full-5.jpg",
    number: "05.",
    title: "Полное сервисное обеспечение для партнеров",
    content: `Предоставляем полный цикл сервисного обслуживания для всех наших брендов.\n\nВозможна авторизация сервисных центров по запросу партнеров.`,
  },
];
</script>
<style scoped>
.services {
  max-width: 1920px;
  width: 100%;
  display: flex;
  flex-direction: row;
  padding: 100px 160px;
  gap: 107px;
}
.services__text-container {
  display: flex;
  flex-direction: column;
  max-width: 552px;
  gap: 24px;
}
.services__title {
  color: var(--Dark-Blue, #000c2a);
  font-family: Montserrat;
  font-size: 36px;
  font-style: normal;
  font-weight: 600;
  line-height: normal;
}
.services__text {
  color: var(--500, #465564);
  font-family: Montserrat;
  font-size: 18px;
  font-style: normal;
  font-weight: 500;
  line-height: 140%; /* 25.2px */
  letter-spacing: 0.036px;
}

@media (min-width: 1280px) and (max-width: 1919px) {
  .services {
    flex-direction: column;
    align-items: center;
    gap: 100px;
  }
  .services__text-container {
    max-width: 924px;
    width: 100%;
  }
}
@media (min-width: 1025px) and (max-width: 1279px) {
  .services {
    flex-direction: column;
    align-items: center;
    gap: 100px;
    padding: 100px 60px;
  }
  .services__card-title {
    padding: 20px 0;
  }
  .services__text-container {
    max-width: 924px;
    width: 100%;
  }
}
@media (min-width: 768px) and (max-width: 1024px) {
  .services {
    flex-direction: column;
    align-items: center;
    gap: 100px;
    padding: 100px 60px;
  }

  .services__text-container {
    max-width: 1000px;
    width: 100%;
  }
}
@media (min-width: 375px) and (max-width: 767px) {
  .services {
    flex-direction: column;
    align-items: center;
    gap: 40px;
    padding: 60px 20px;
  }
  .services__text {
    font-size: 16px;
  }
  .services__text-container {
    max-width: 1000px;
    gap: 20px;
    width: 100%;
  }
}
@media (min-width: 320px) and (max-width: 374px) {
  .services {
    flex-direction: column;
    align-items: center;
    gap: 40px;
    padding: 60px 20px;
  }
  .services__text {
    font-size: 16px;
  }

  .services__text-container {
    max-width: 1000px;
    width: 100%;
    gap: 20px;
  }
}
</style>
