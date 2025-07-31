<template>
  <section class="intro">
    <div class="intro__text-container">
      <h1 class="intro__title">Новые точки соприкосновения</h1>
      <p class="intro__subtitle">
        AVAKS - Дистрибуция и оптовые поставки в сфере потребительской
        электроники и бытовой техники
      </p>
    </div>
  </section>
</template>
<script setup lang="ts"></script>
<style scoped>
.intro {
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  background: url(../../../static/img/homepage/header/1920x892.jpg) white 50% /
    cover no-repeat;
}
.intro__text-container {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 26px;
  max-width: 790px;
  width: 100%;
  /* padding: 328px 0 435px; */
  padding: 288px 0 395px;
}
.intro__title {
  color: #fff;
  text-align: center;
  font-family: Montserrat;
  font-size: 74px;
  font-style: normal;
  font-weight: 600;
  line-height: 100%;
}
.intro__subtitle {
  color: #fff;
  text-align: center;
  font-family: Montserrat;
  font-size: 32px;
  font-style: normal;
  font-weight: 400;
  line-height: 120%;
  opacity: 0.6;
  /* max-width: 604px; */
}
@media (min-width: 1024px) and (max-width: 1439px) {
  .intro {
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    background: url(../../../static/img/homepage/header/768.jpg) white 50% /
      cover no-repeat;
  }
}
@media (min-width: 768px) and (max-width: 1023px) {
  .intro {
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    background: url(../../../static/img/homepage/header/768.jpg) white 50% /
      cover no-repeat;
  }
  .intro__text-container {
    max-width: 648px;
    padding: 134px 0 175px;
    gap: 24px;
  }
  .intro__title {
    color: #fff;
    text-align: center;
    font-family: Montserrat;
    font-size: 64px;
    font-style: normal;
    font-weight: 600;
    line-height: 100%;
  }
  .intro__subtitle {
    color: #fff;
    text-align: center;
    font-family: Montserrat;
    font-size: 18px;
    font-style: normal;
    font-weight: 500;
    line-height: 120%;
    opacity: 1;
  }
}
@media (min-width: 560px) and (max-width: 767px) {
  .intro__text-container {
    max-width: 450px;
    padding: 134px 0 174px;
    gap: 24px;
  }
  .intro__title {
    color: #fff;
    text-align: center;
    font-family: Montserrat;
    font-size: 48px;
    font-style: normal;
    font-weight: 600;
    line-height: 120%;
  }
  .intro__subtitle {
    color: #fff;
    text-align: center;
    font-family: Montserrat;
    font-size: 18px;
    font-style: normal;
    font-weight: 500;
    line-height: 120%;
    opacity: 1;
  }
}
@media (min-width: 375px) and (max-width: 559px) {
  .intro {
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    background: url(../../../static/img/homepage/header/375.jpg) white 60% /
      cover no-repeat;
  }
  .intro__text-container {
    max-width: 335px;
    padding: 130px 0 100px;
    gap: 20px;
  }
  .intro__title {
    color: #fff;
    text-align: center;
    font-family: Montserrat;
    font-size: 32px;
    font-style: normal;
    font-weight: 600;
    line-height: 120%;
  }
  .intro__subtitle {
    font-size: 15px;
    font-style: normal;
    font-weight: 500;
    line-height: 120%;
    opacity: 1;
  }
}
@media (min-width: 320px) and (max-width: 374px) {
  .intro {
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    background: url(../../../static/img/homepage/header/375.jpg) white 60% /
      cover no-repeat;
  }
  .intro__text-container {
    max-width: 335px;
    padding: 130px 0 100px;
    gap: 20px;
  }
  .intro__title {
    color: #fff;
    text-align: center;
    font-family: Montserrat;
    font-size: 28px;
    font-style: normal;
    font-weight: 600;
    line-height: 120%;
  }
  .intro__subtitle {
    font-size: 15px;
    font-style: normal;
    font-weight: 500;
    line-height: 120%;
    opacity: 1;
  }
}
</style>
