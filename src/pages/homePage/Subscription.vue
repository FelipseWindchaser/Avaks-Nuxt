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

@media (min-width: 768px) and (max-width: 1024px) {
}
@media (min-width: 375px) and (max-width: 767px) {
}
@media (min-width: 320px) and (max-width: 374px) {
}
</style>
