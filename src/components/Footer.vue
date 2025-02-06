<template>
  <footer class="footer">
    <div class="footer__container">
      <a class="footer__logo">
        <img
          class="footer__image"
          src="../../static/img/homepage/logo_footer.svg"
          alt="логотип_компании"
        />
      </a>
      <p class="footer__tag">Новые точки соприкосновения</p>
    </div>
    <div class="footer__wrapper">
      <div class="footer__text-container">
        <p class="footer__text">
          © Компания AVAKS. Все права защищены. 2015-2025.
        </p>
        <p class="footer__text">
          Сайт использует файлы «cookie» с целью повышения удобства пользования.
          «Cookie» представляют собой небольшие файлы, содержащие информацию о
          предыдущих посещениях веб-сайта. Если вы не хотите получать файлы
          «cookie», измените настройки браузера.
        </p>
        <p class="footer__text">
          Вся представленная на сайте информация, в том числе касающаяся
          технических характеристик оборудования, условий и технических
          возможностей подключения, наличия на складе, стоимости товаров и
          услуг, носит информационный характер и ни при каких условиях не
          является публичной офертой, определяемой положениями статьи 437
          Гражданского кодекса РФ.
        </p>
      </div>
      <a class="footer__link">Политика конфиденциальности</a>
    </div>
  </footer>
</template>
<script setup lang="ts">
// defineProps<{}>();
</script>
<style scoped>
.footer {
  background-color: #000c2a;
  padding: 80px 160px 100px;
  display: flex;
  flex-direction: column;
  gap: 64px;
}
.footer__logo {
  cursor: pointer;
}
.footer__logo:hover {
  opacity: 0.7;
}
.footer__container {
  display: flex;
  flex-direction: column;
  gap: 24px;
}
.footer__tag {
  color: var(--White, #fff);
  font-feature-settings: "liga" off, "clig" off;
  font-family: "DM Sans";
  font-size: 18px;
  font-style: normal;
  font-weight: 400;
  line-height: 30px;
  opacity: 0.6;
}
.footer__wrapper {
  display: flex;
  flex-direction: row;
  padding-top: 35px;
  border-top: 1px solid rgba(100, 100, 100, 0.2);
  justify-content: space-between;
}
.footer__text-container {
  display: flex;
  flex-direction: column;
  max-width: 895px;
  gap: 20px;
}
.footer__text {
  color: var(--White, #fff);
  font-family: Montserrat;
  font-size: 15px;
  font-style: normal;
  font-weight: 500;
  line-height: 20px;
  opacity: 0.6;
}
.footer__link {
  color: var(--White, #fff);
  text-align: right;
  font-family: Montserrat;
  font-size: 15px;
  font-style: normal;
  font-weight: 500;
  line-height: 20px;
  cursor: pointer;
  opacity: 0.6;
}
.footer__link:hover {
  opacity: 0.4;
}
</style>
