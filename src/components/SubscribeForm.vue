<template>
  <form
    class="subscription__form"
    name="subscription-form"
    @submit.prevent="submitForm"
  >
    <input
      id="email-input"
      name="email"
      class="subscription__form-input"
      v-model="formData.email"
      type="email"
      placeholder="name@gmail.com"
    />
    <button class="subscription__form-button" type="submit">Отправить</button>
  </form>
</template>
<script setup lang="ts">
defineProps<{}>();

const isSubmitting = ref(false);
const formDataDefault = {
  email: "",
} as const;
const formData = ref<{
  email: string;
}>({ ...formDataDefault });

const submitForm = async () => {
  isSubmitting.value = true;
  try {
    const response = await fetch("./subscribe-form.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(formData.value),
    });

    if (response.ok) {
      formData.value = { ...formDataDefault };
    }
  } catch (error) {
    if (error instanceof Error) alert("Произошла ошибка: " + error.message);
  } finally {
    isSubmitting.value = false;
  }
};
</script>
<style scoped>
.subscription__form {
  height: 58px;
  width: 100%;
  display: flex;
  flex-direction: row;
  border: none;
  outline: none;
}
.subscription__form-input {
  width: 100%;
  border: none;
  outline: none;
  border-radius: 7px 0px 0px 7px;
  background: var(--White, #fff);
  padding: 12px;
}
.subscription__form-button {
  max-width: 270px;
  width: 100%;
  border-radius: 0px 7px 7px 0px;
  background: var(--Dark-Blue, #000c2a);
  backdrop-filter: blur(4.650000095367432px);
  display: flex;
  justify-content: center;
  align-items: center;
  color: var(--White, #fff);
  font-family: Montserrat;
  font-size: 15px;
  font-style: normal;
  font-weight: 600;
  line-height: normal;
  border: none;
  outline: none;
  cursor: pointer;
}
.subscription__form-button:hover {
  opacity: 0.7;
}
@media (min-width: 1440px) and (max-width: 1919px) {
}
@media (min-width: 1024px) and (max-width: 1439px) {
  .subscription__form {
    max-width: 700px;
  }
}
@media (min-width: 768px) and (max-width: 1024px) {
  .subscription__form {
    max-width: 640px;
  }
}
@media (min-width: 320px) and (max-width: 767px) {
  .subscription__form {
    max-width: 100%;
  }
  .subscription__form-input {
    font-size: 14px;
  }
}
</style>
