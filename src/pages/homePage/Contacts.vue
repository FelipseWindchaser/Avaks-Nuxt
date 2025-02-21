<template>
  <section class="contacts" id="contacts">
    <h2 class="contacts__title">Контактная информация</h2>
    <div class="contacts__cards">
      <div class="contacts__card">
        <img
          class="contacts__card-icon"
          src="../../../static/img/homepage/icons/contact-icons/g1.svg"
          alt="иконка_стрелка"
        />
        <div class="contacts__card-container">
          <p class="contacts__card-title">По общим вопросам</p>
          <a href="mailto:info@avaks.org" class="contacts__card-content"
            >info@avaks.org</a
          >
        </div>
      </div>
      <div class="contacts__card">
        <img
          class="contacts__card-icon"
          src="../../../static/img/homepage/icons/contact-icons/g2.svg"
          alt="иконка_стрелка"
        />
        <div class="contacts__card-container">
          <p class="contacts__card-title">Для оптовых покупателей</p>
          <a href="mailto:sales@avaks.org" class="contacts__card-content"
            >sales@avaks.org</a
          >
        </div>
      </div>

      <div class="contacts__card">
        <img
          class="contacts__card-icon"
          src="../../../static/img/homepage/icons/contact-icons/g3.svg"
          alt="иконка_стрелка"
        />
        <div class="contacts__card-container">
          <p class="contacts__card-title">Вывод товара на маркетплейсы</p>
          <a href="mailto:marketplace@avaks.org" class="contacts__card-content"
            >marketplace@avaks.org</a
          >
        </div>
      </div>
      <div class="contacts__card">
        <img
          class="contacts__card-icon"
          src="../../../static/img/homepage/icons/contact-icons/g4.svg"
          alt="иконка_стрелка"
        />
        <div class="contacts__card-container">
          <p class="contacts__card-title">Производителям</p>
          <a href="mailto:distribution@avaks.org" class="contacts__card-content"
            >distribution@avaks.org</a
          >
        </div>
      </div>
      <div class="contacts__card">
        <img
          class="contacts__card-icon"
          src="../../../static/img/homepage/icons/contact-icons/g5.svg"
          alt="иконка_стрелка"
        />
        <div class="contacts__card-container">
          <p class="contacts__card-title">Гарантия и сервисное обслуживание</p>
          <a href="mailto:warranty@avaks.org" class="contacts__card-content"
            >warranty@avaks.org</a
          >
        </div>
      </div>
      <div class="contacts__card">
        <img
          class="contacts__card-icon"
          src="../../../static/img/homepage/icons/contact-icons/g6.svg"
          alt="иконка_стрелка"
        />
        <div class="contacts__card-container">
          <p class="contacts__card-title">Для СМИ</p>
          <a href="mailto:press@avaks.org" class="contacts__card-content"
            >press@avaks.org</a
          >
        </div>
      </div>
      <div class="contacts__card">
        <img
          class="contacts__card-icon"
          src="../../../static/img/homepage/icons/contact-icons/g7.svg"
          alt="иконка_стрелка"
        />
        <div class="contacts__card-container">
          <p class="contacts__card-title">Офис</p>
          <p class="contacts__card-content">
            г. Москва, Павелецкая набережная, д. 2
          </p>
        </div>
      </div>
      <div class="contacts__card">
        <img
          class="contacts__card-icon"
          src="../../../static/img/homepage/icons/contact-icons/g8.svg"
          alt="иконка_стрелка"
        />
        <div class="contacts__card-container">
          <p class="contacts__card-title">Для инвесторов</p>
          <a href="mailto:investors@avaks.org" class="contacts__card-content"
            >investors@avaks.org</a
          >
        </div>
      </div>
      <div class="contacts__card">
        <img
          class="contacts__card-icon"
          src="../../../static/img/homepage/icons/contact-icons/g9.svg"
          alt="иконка_стрелка"
        />
        <div class="contacts__card-container">
          <p class="contacts__card-title">Карьера</p>
          <a href="mailto:hr@avaks.org" class="contacts__card-content"
            >hr@avaks.org</a
          >
        </div>
      </div>
    </div>
  </section>
</template>
<script setup lang="ts">
defineProps<{}>();
</script>
<style scoped>
.contacts {
  width: 100%;
  display: flex;
  flex-direction: column;
  padding: 100px 160px 172px;
  gap: 38px;
  background: url(../../../static/img/homepage/contacts.png) white 50% / cover
    no-repeat;
}
.contacts__title {
  color: var(--White, #fff);
  font-family: Montserrat;
  font-size: 40px;
  font-style: normal;
  font-weight: 600;
  line-height: normal;
}
.contacts__cards {
  width: 100%;
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  gap: 38px 20px;
}
.contacts__card {
  border-radius: 7px;
  background: rgba(217, 217, 217, 0.08);
  backdrop-filter: blur(5.900000095367432px);
  padding: 32px;
  display: flex;
  flex-direction: column;
  gap: 27px;
}
.contacts__card-icon {
  width: 51px;
  height: 51px;
}
.contacts__card-container {
  display: flex;
  flex-direction: column;
  gap: 10px;
}
.contacts__card-title {
  color: var(--White, #fff);
  font-family: Montserrat;
  font-size: 20px;
  font-style: normal;
  font-weight: 700;
  line-height: normal;
}
.contacts__card-content {
  color: var(--White, #fff);
  font-family: Montserrat;
  font-size: 15px;
  font-style: normal;
  font-weight: 500;
  line-height: 20px; /* 133.333% */
  letter-spacing: 0.03px;
  text-decoration: none;
}
@media (min-width: 1024px) and (max-width: 1279px) {
  .contacts {
    padding: 80px 60px;
  }
}
@media (min-width: 768px) and (max-width: 1023px) {
  .contacts {
    padding: 80px 60px;
  }
  .contacts__cards {
    display: flex;
    flex-direction: column;
    gap: 40px;
  }
  .contacts__card {
    flex-direction: row;
    gap: 35px;
    background: none;
    backdrop-filter: none;
    padding: 0;
  }
  .contacts__card-container {
    gap: 8px;
  }
}
@media (min-width: 675px) and (max-width: 767px) {
  .contacts {
    padding: 80px 60px;
  }
  .contacts__cards {
    display: flex;
    flex-direction: column;
    gap: 40px;
  }
  .contacts__card {
    flex-direction: row;
    gap: 35px;
    background: none;
    backdrop-filter: none;
    padding: 0;
  }
  .contacts__card-container {
    gap: 8px;
  }
  .contacts__card-icon {
    width: 47px;
    height: 47px;
  }
}
@media (min-width: 375px) and (max-width: 674px) {
  .contacts {
    padding: 60px 20px;
  }
  .contacts__cards {
    display: flex;
    flex-direction: column;
    gap: 48px;
  }
  .contacts__card {
    flex-direction: row;
    gap: 35px;
    background: none;
    backdrop-filter: none;
    padding: 0;
  }
  .contacts__card-container {
    gap: 8px;
  }
  .contacts__card-icon {
    display: none;
  }
}
@media (min-width: 320px) and (max-width: 374px) {
  .contacts {
    padding: 60px 20px;
  }
  .contacts__cards {
    display: flex;
    flex-direction: column;
    gap: 48px;
  }
  .contacts__card {
    flex-direction: row;
    gap: 35px;
    background: none;
    backdrop-filter: none;
    padding: 0;
  }
  .contacts__card-container {
    gap: 8px;
  }
  .contacts__title {
    font-size: 36px;
  }

  .contacts__card-icon {
    display: none;
  }
}
</style>
