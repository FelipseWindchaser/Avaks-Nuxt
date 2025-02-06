<template>
  <section class="partnership" id="partnership">
    <div class="partnership__container">
      <h2 class="partnership__title">Для новых партнеров</h2>
      <p class="partnership__description">
        Мы заинтересованы в новом сотрудничестве и всегда готовы рассматривать
        предложения поставщиков и производителей, которым интересны рынки РФ и
        стран ЕАЭС для расширения ассортимента товаров наилучшего качества.
      </p>
      <ul class="partnership__list">
        <li class="partnership__list-item">
          <div class="partnership__list-item-border">
            <p class="partnership__list-item-title">Выделенная поддержка</p>
          </div>
          <p class="partnership__list-item-text">
            Наша команда стремится предоставить исключительную поддержку, чтобы
            обеспечить ваше удовлетворение.
          </p>
        </li>
        <li class="partnership__list-item">
          <div class="partnership__list-item-border">
            <p class="partnership__list-item-title">
              Ответственное ведение бизнеса
            </p>
          </div>
          <p class="partnership__list-item-text">
            AVAKS придерживается принципов ответственного ведения бизнеса и
            ожидает от своих партнеров по сотрудничеству таких же стандартов в
            совместной работе.
          </p>
        </li>
      </ul>
      <ContactButton :openPopup="openPopup" />
    </div>
    <div class="partnership__image-container">
      <img
        class="partnership__image"
        src="../../../static/img/homepage/partnership_image.jpg"
        alt="иконка_небоскребы"
      />
    </div>
  </section>
</template>
<script setup lang="ts">
defineProps<{
  openPopup: (event: any) => void;
}>();
</script>
<style scoped>
.partnership {
  width: 100%;
  padding-left: 160px;
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  align-items: center;
  background: #f5f7fc;
}
.partnership__container {
  max-width: 677px;
}
.partnership__title {
  color: #0a2540;
  font-family: Montserrat;
  font-size: 36px;
  font-style: normal;
  font-weight: 600;
  line-height: normal;
  padding-bottom: 24px;
}
.partnership__description {
  color: var(--500, #465564);
  font-family: Montserrat;
  font-size: 18px;
  font-style: normal;
  font-weight: 500;
  line-height: 140%;
  padding-bottom: 51px;
}
.partnership__list {
  padding: 0 0 51px 19px;
  margin: 0;
  list-style: none;
  display: flex;
  flex-direction: column;
  gap: 30px;
}
.partnership__list-item {
  max-width: 520px;
  display: flex;
  flex-direction: column;
  gap: 9px;
  padding-left: 19px;
}
.partnership__list-item-border {
  border-left: 3px solid #325cc8;
}
.partnership__list-item-title {
  padding-left: 16px;
  color: var(--Text-primary, #000);
  font-family: Montserrat;
  font-size: 20px;
  font-style: normal;
  font-weight: 600;
  line-height: 120%; /* 24px */
}
.partnership__list-item-text {
  padding-left: 19px;
  color: #425466;

  /* Text/Small/Medium */
  font-family: Montserrat;
  font-size: 15px;
  font-style: normal;
  font-weight: 500;
  line-height: 150%; /* 22.5px */
}

.partnership__image-container {
  max-height: 739px;
  max-width: 970px;
}
.partnership__image {
  width: 100%;
}
@media (min-width: 768px) and (max-width: 1024px) {
}
@media (min-width: 375px) and (max-width: 767px) {
}
@media (min-width: 320px) and (max-width: 374px) {
}
</style>
