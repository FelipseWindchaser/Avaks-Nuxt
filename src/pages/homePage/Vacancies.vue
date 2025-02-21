<template>
  <section class="vacancies">
    <div class="vacancies__container">
      <h2 class="vacancies__title">Посмотреть текущие вакансии</h2>
      <a
        href="https://hh.ru/employer/2515597"
        target="_blank"
        class="vacancies__link-container"
      >
        <p class="vacancies__link-text">Смотреть</p>
        <div class="vacancies__icon-container">
          <img
            class="vacancies__icon"
            src="../../../static/img/homepage/icons/arrow-right.svg"
            alt="иконка_стрелка"
          />
        </div>
      </a>
    </div>
    <img
      src="../../../static/img/homepage/vacancies/bg_1920.avif"
      class="vacancies__image"
    />
  </section>
</template>
<script setup lang="ts">
defineProps<{}>();
</script>
<style scoped>
.vacancies {
  width: 100%;
  background: #f1f2f5;
  padding: 0 160px;
  position: relative;
  height: 395px;
  display: flex;
  align-items: center;
}
.vacancies__container {
  display: flex;
  flex-direction: column;
  gap: 48px;
  z-index: 1;
}
.vacancies__title {
  color: var(--Dark-Blue, #000c2a);
  font-family: Montserrat;
  font-size: 36px;
  font-style: normal;
  font-weight: 600;
  line-height: normal;
  letter-spacing: 0.072px;
  max-width: 587px;
}
.vacancies__link-container {
  max-width: max-content;
  text-decoration: none;
  display: flex;
  flex-direction: row;
  align-items: center;
  gap: 24px;
}
.vacancies__link-text {
  color: var(--Blue, #325cc8);
  font-family: Montserrat;
  font-size: 15px;
  font-style: normal;
  font-weight: 600;
  line-height: normal;
}
.vacancies__icon-container {
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 8px;
  border: 1px solid #325cc8;
  border-radius: 37px;
}
.vacancies__image {
  display: flex;
  justify-content: center;
  align-items: center;
  position: absolute;
  right: 0;
  top: 0;
  pointer-events: none;
  z-index: 0;
}
@media (min-width: 1024px) and (max-width: 1280px) {
  .vacancies {
    overflow: hidden;
    padding: 80px 60px;
    align-items: flex-start;
  }
  .vacancies__image {
    top: 30%;
  }
  .vacancies__container {
    display: flex;
    flex-direction: column;
    gap: 27px;
    z-index: 1;
  }
  .vacancies__icon-container {
    padding: 0;
    border: none;
  }
  .vacancies__link-container {
    gap: 20px;
  }
  .vacancies__title {
    font-size: 28px;
    max-width: 315px;
  }
}
@media (min-width: 768px) and (max-width: 1023px) {
  .vacancies {
    overflow: hidden;
    padding: 80px 60px;
    align-items: flex-start;
  }
  .vacancies__image {
    top: 30%;
  }
  .vacancies__container {
    display: flex;
    flex-direction: column;
    gap: 27px;
    z-index: 1;
  }
  .vacancies__icon-container {
    padding: 0;
    border: none;
  }
  .vacancies__link-container {
    gap: 20px;
  }
  .vacancies__title {
    font-size: 28px;
    max-width: 315px;
  }
}
@media (min-width: 560px) and (max-width: 767px) {
  .vacancies {
    overflow: hidden;
    padding: 60px 20px;
    align-items: flex-start;
  }
  .vacancies__image {
    right: -30%;
    top: 30%;
  }
  .vacancies__container {
    display: flex;
    flex-direction: column;
    gap: 27px;
    z-index: 1;
  }
  .vacancies__icon-container {
    padding: 0;
    border: none;
  }
  .vacancies__link-container {
    gap: 20px;
  }
  .vacancies__title {
    font-size: 28px;
    max-width: 315px;
  }
}
@media (min-width: 440px) and (max-width: 559px) {
  .vacancies {
    overflow: hidden;
    padding: 60px 20px;
    align-items: flex-start;
  }
  .vacancies__image {
    right: -40%;
    top: 40%;
  }
  .vacancies__container {
    display: flex;
    flex-direction: column;
    gap: 27px;
    z-index: 1;
  }
  .vacancies__icon-container {
    padding: 0;
    border: none;
  }
  .vacancies__link-container {
    gap: 20px;
  }
  .vacancies__title {
    font-size: 28px;
    max-width: 315px;
  }
}
@media (min-width: 375px) and (max-width: 439px) {
  .vacancies {
    overflow: hidden;
    padding: 60px 20px;
    align-items: flex-start;
  }
  .vacancies__image {
    right: -70%;
    top: 35%;
  }
  .vacancies__container {
    display: flex;
    flex-direction: column;
    gap: 27px;
    z-index: 1;
  }
  .vacancies__icon-container {
    padding: 0;
    border: none;
  }
  .vacancies__link-container {
    gap: 20px;
  }
  .vacancies__title {
    font-size: 28px;
    max-width: 315px;
  }
}
@media (min-width: 320px) and (max-width: 374px) {
  .vacancies {
    overflow: hidden;
    padding: 60px 20px;
    align-items: flex-start;
  }
  .vacancies__image {
    right: -80%;
    top: 40%;
  }
  .vacancies__container {
    display: flex;
    flex-direction: column;
    gap: 27px;
    z-index: 1;
  }
  .vacancies__icon-container {
    padding: 0;
    border: none;
  }
  .vacancies__link-container {
    gap: 20px;
  }
  .vacancies__title {
    font-size: 28px;
    max-width: 315px;
  }
}
</style>
