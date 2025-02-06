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
    <div class="services__accordion">
      <ul class="services__card">
        <li><p class="services__card-number">01.</p></li>
        <li><p class="services__card-title">Выделенная поддержка</p></li>
        <li>
          <div class="services__card-text-container">
            <p>
              Для каждого партнера выделен индивидуальный менеджер для удобства
              решения всех вопросов.
            </p>
            <p>
              Детальное погружение в специфику бизнеса дает менеджеру
              возможность оперативно и точно реагировать на запросы партнеров.
            </p>
          </div>
        </li>
      </ul>
    </div>
  </section>
</template>
<script setup lang="ts"></script>
<style scoped>
.services {
  width: 100%;
  display: flex;
  flex-direction: row;
  padding: 100px 160px;
  gap: 122px;
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
@media (min-width: 768px) and (max-width: 1024px) {
}
@media (min-width: 375px) and (max-width: 767px) {
}
@media (min-width: 320px) and (max-width: 374px) {
}
</style>
