<template>
  <header class="header">
    <div class="header__container">
      <nav class="header__navigation">
        <button class="header__navigation-wrapper" @click="toggleNav">
          <img
            :class="`header__navigation-icon ${isNavOpen ? 'hidden' : ''}`"
            src="../../static/img/homepage/icons/menu_header.svg"
            alt="иконка_меню"
          />
          <img
            :class="`header__navigation-icon_closed ${
              isNavOpen ? '' : 'hidden'
            }`"
            src="../../static/img/homepage/icons/menu_closed_header.svg"
            alt="иконка_меню"
          />
          <p class="header__navigation-name">Меню</p>
        </button>

        <ul
          :class="`header__navigation-links list ${isNavOpen ? '' : 'hidden'} `"
        >
          <li class="header__navigation-link-container list-item">
            <a href="#services" class="header__navigation-link">Услуги</a>
          </li>
          <li class="header__navigation-link-container list-item">
            <a href="#our-products" class="header__navigation-link">Продукты</a>
          </li>
          <li class="header__navigation-link-container list-item">
            <a href="#partnership" class="header__navigation-link">Партнеры</a>
          </li>
          <li class="header__navigation-link-container list-item">
            <a href="#faq" class="header__navigation-link">FAQ</a>
          </li>
          <li class="header__navigation-link-container list-item">
            <a href="#contacts" class="header__navigation-link">Контакты</a>
          </li>
        </ul>
      </nav>
      <a class="header__logo">
        <img
          class="header__image"
          src="../../static/img/homepage/logo.svg"
          alt="логотип_компании"
        />
      </a>
      <ul class="header__contacts list">
        <li class="header__contacts-link-container list-item">
          <a href="mailto:info@avaks.org" class="header__contacts-link"
            >info@avaks.org</a
          >
        </li>
      </ul>
    </div>
  </header>
</template>
<script setup lang="ts">
// defineProps<{}>();
const isNavOpen = ref(false);
const toggleNav = () => {
  // console.log(isNavOpen.value);
  isNavOpen.value = !isNavOpen.value;
};
</script>
<style scoped>
.hidden {
  display: none !important;
}
.header {
  width: 100%;
  border-bottom: 1px solid rgba(255, 255, 255, 0.15);
  background-color: transparent;
  position: absolute;
}
.header__container {
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: space-between;
  gap: 40px;
  padding: 25px 160px;
}

.header__navigation {
  display: flex;
  flex-direction: column;
  position: relative;
}
.header__navigation-wrapper {
  display: flex;
  flex-direction: row;
  color: #fff;
  gap: 7px;
  align-items: center;
  cursor: pointer;
  background: none;
  border: none;
  outline: none;
  padding: 0;
}
.header__navigation-wrapper:hover {
  opacity: 0.7;
}
.header__navigation-wrapper:focus {
  border: none;
  outline: none;
}
.header__navigation-name {
  color: #fff;
  font-family: Montserrat;
  font-size: 15px;
  font-style: normal;
  font-weight: 600;
  line-height: normal;
}
.header__navigation-links {
  display: flex;
  flex-direction: column;
  gap: 20px;
  position: absolute;
  z-index: 5;
  top: 55px;
  width: 160px;
  color: #fff;
  font-family: Montserrat;
  font-size: 15px;
  font-style: normal;
  font-weight: 600;
  line-height: normal;
  background-color: #171f36;
  padding: 20px;
  border-radius: 7px;
}

.header__navigation-link {
  color: #fff;
  text-decoration: none;
  cursor: pointer;
}
.header__navigation-link:hover {
  opacity: 0.7;
}
.list {
  list-style: none;
  margin: 0;
}
.header__contacts {
  padding: 0;
}
.header__contacts:hover {
  opacity: 0.7;
}
.header__contacts-link {
  color: white;
  text-decoration: none;
  color: #fff;
  font-family: Montserrat;
  font-size: 15px;
  font-style: normal;
  font-weight: 600;
  line-height: normal;
}
.header__logo {
  cursor: pointer;
}
.header__logo:hover {
  opacity: 0.7;
}
@media (min-width: 768px) and (max-width: 1024px) {
  .header__container {
    flex-direction: row-reverse;
    gap: 20px;
    padding: 25px 60px;
  }
  .header__contacts {
    display: none;
  }
  .header__navigation-wrapper {
    flex-direction: row-reverse;
  }
  .header__navigation-links {
    right: -55px;
  }
}
@media (min-width: 320px) and (max-width: 767px) {
  .header__container {
    flex-direction: row-reverse;
    gap: 20px;
    padding: 25px 20px;
  }
  .header__contacts {
    display: none;
  }
  .header__navigation-wrapper {
    flex-direction: row-reverse;
  }
  .header__navigation-links {
    right: -15px;
    width: 160px;
  }
  .header__navigation-name {
    display: none;
  }
}
</style>
