<template>
  <section class="subscription">
    <div class="subscription__text-container">
      <h2 class="subscription__title">Будьте в курсе</h2>
      <p class="subscription__text">
        Подпишитесь на нашу рассылку, чтобы получать уведомления о вакансиях,
        новости компании и обновления отрасли.
      </p>
    </div>
    <SubscribeForm />
  </section>
</template>
<script setup lang="ts">
defineProps<{}>();
</script>
<style scoped>
.subscription {
  padding: 52px 160px;
  background: var(--Blue, #325cc8);
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: space-between;
  gap: 76px;
}
.subscription__text-container {
  display: flex;
  flex-direction: column;
  gap: 16px;
  max-width: 599px;
}
.subscription__title {
  color: var(--White, #fff);
  font-family: Montserrat;
  font-size: 32px;
  font-style: normal;
  font-weight: 600;
  line-height: normal;
}
.subscription__text {
  color: var(--White, #fff);
  font-family: Montserrat;
  font-size: 15px;
  font-style: normal;
  font-weight: 500;
  line-height: 24px; /* 160% */
  opacity: 0.6;
}

@media (min-width: 1440px) and (max-width: 1919px) {
  .subscription__text-container {
    max-width: 400px;
  }
}
@media (min-width: 1024px) and (max-width: 1439px) {
  .subscription {
    padding: 80px 60px;
    background: var(--Blue, #325cc8);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;
    gap: 48px;
  }
  .subscription__text-container {
    max-width: 700px;
  }
}
@media (min-width: 768px) and (max-width: 1024px) {
  .subscription {
    padding: 80px 60px;
    background: var(--Blue, #325cc8);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;
    gap: 48px;
  }
  .subscription__text-container {
    max-width: 640px;
  }
  .subscription__title {
    color: var(--White, #fff);
    font-size: 28px;
    font-weight: 600;
  }
  .subscription__text {
    color: var(--White, #fff);
    font-size: 18px;
    font-weight: 500;
    line-height: 28px; /* 160% */
    opacity: 1;
  }
}
@media (min-width: 675px) and (max-width: 767px) {
  .subscription {
    padding: 80px 60px;
    background: var(--Blue, #325cc8);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;
    gap: 48px;
  }
  .subscription__text-container {
    max-width: 100%;
    gap: 20px;
  }
  .subscription__title {
    color: var(--White, #fff);
    font-size: 28px;
    font-weight: 600;
  }
  .subscription__text {
    color: var(--White, #fff);
    font-size: 18px;
    font-weight: 500;
    line-height: 28px; /* 160% */
    opacity: 1;
  }
}
@media (min-width: 320px) and (max-width: 674px) {
  .subscription {
    padding: 60px 20px;
    background: var(--Blue, #325cc8);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;
    gap: 48px;
  }
  .subscription__text-container {
    max-width: 100%;
    gap: 20px;
  }
  .subscription__title {
    color: var(--White, #fff);
    font-size: 28px;
    font-weight: 600;
  }
  .subscription__text {
    color: var(--White, #fff);
    font-size: 18px;
    font-weight: 500;
    line-height: 28px; /* 160% */
    opacity: 1;
  }
}
</style>
