<template>
  <form class="contact-form" name="contact-form" @submit.prevent="submitForm">
    <h2 class="contact-form__title">Оставьте заявку</h2>
    <label class="contact-form__form-label" for="fullname"
      >ФИО<span class="color">*</span></label
    >
    <input
      name="fullname"
      id="fullname"
      class="contact-form__input"
      type="text"
      v-model="formData.fullname"
      required
    />
    <label class="contact-form__form-label" for="company"
      >Компания<span class="color">*</span></label
    >
    <input
      name="company"
      id="company"
      class="contact-form__input"
      type="text"
      v-model="formData.company"
      required
    />
    <label class="contact-form__form-label" for="city"
      >Город<span class="color">*</span></label
    >
    <input
      name="city"
      id="city"
      class="contact-form__input"
      type="text"
      v-model="formData.city"
      required
    />
    <label class="contact-form__form-label" for="email"
      >Электронная почта<span class="color">*</span></label
    >
    <input
      name="email"
      id="email"
      class="contact-form__input"
      type="email"
      v-model="formData.email"
      required
    />
    <label class="contact-form__form-label" for="phone"
      >Телефон<span class="color">*</span></label
    >
    <input
      name="phone"
      id="phone"
      class="contact-form__input"
      type="tel"
      v-model="formData.phone"
      required
    />
    <label class="contact-form__form-label" for="content"
      >Тип продукции, дополнительная информация<span class="color">*</span>
    </label>
    <input
      name="content"
      id="content"
      class="contact-form__input textarea"
      type="textarea"
      v-model="formData.content"
      required
    />
    <div class="contact-form__checkbox_wrapper">
      <input
        class="contact-form__checkbox"
        type="checkbox"
        id="checkbox"
        checked
      />
      <p class="contact-form__checkbox_text">
        Я принимаю
        <a href="#" class="contact-form__link"
          >условия передачи информации и обработки персональных данных</a
        >
      </p>
    </div>

    <button class="contact-form__button" type="submit">Отправить</button>
  </form>
</template>
<script setup lang="ts">
defineProps<{}>();
const isSubmitting = ref(false);

const formData = ref<{
  fullname: string;
  email: string;
  phone: string;
  company: string;
  city: string;
  content: string;
}>({
  fullname: "",
  email: "",
  phone: "",
  company: "",
  city: "",
  content: "",
});

const submitForm = async () => {
  isSubmitting.value = true;
  try {
    const response = await fetch("./contactFormMailing.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(formData.value),
    });

    // if (!response.ok) {
    //   throw new Error("Ошибка отправки формы");
    // }

    const result = await response.text(); // или `response.json()` если PHP возвращает JSON

    alert(result);
    // alert("Письмо успешно отправлено!");
  } catch (error) {
    if (error instanceof Error) alert("Произошла ошибка: " + error.message);
  } finally {
    isSubmitting.value = false;
  }
};
</script>
<style scoped>
.contact-form {
  display: flex;
  flex-direction: column;
  gap: 12px;
}
.contact-form__title {
  color: #0a2540;
  font-family: Montserrat;
  font-size: 28px;
  font-style: normal;
  font-weight: 600;
  line-height: normal;
  text-align: center;
  padding-bottom: 14px;
}
.contact-form__button {
  height: 60px;
  padding: 0;
  margin: 0;
  border: none;
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 7px;
  background: var(--Blue, #325cc8);
  backdrop-filter: blur(4.650000095367432px);
  color: var(--White, #fff);
  font-family: Montserrat;
  font-size: 15px;
  font-style: normal;
  font-weight: 600;
  line-height: normal;
  cursor: pointer;
}
.contact-form__button:hover {
  opacity: 0.7;
}
.contact-form__form-label {
  color: #0a2540;
  font-size: 16px;
  font-style: normal;
  font-weight: 600;
  line-height: normal;
}
.contact-form__input {
  height: 40px;
  border-radius: 16px;
  border: none;
  outline: none;
  padding: 15px 18px;
  font-family: Montserrat;
  font-size: 15px;
  font-style: normal;
  font-weight: 400;
  line-height: normal;
  border-radius: 10px;
  border: 1px solid var(--grey-stroke, #dfdfdf);
  background: var(--white, #fff);
  color: #0a2540;
  font-style: normal;
}
.contact-form__input::placeholder {
  color: var(--grey-secondary, #b0b0b0);
  font-family: "Noto Sans";
  font-size: 15px;
  font-style: normal;
  font-weight: 400;
  line-height: normal;
}
.contact-form__checkbox {
  align-self: flex-start;
  width: 40px;
  height: 40px;
  border-radius: 4px;
}
.contact-form__checkbox:hover {
  cursor: pointer;
}
.contact-form__checkbox_wrapper {
  display: flex;
  flex-direction: row;
  align-items: center;
  gap: 12px;
}
.contact-form__checkbox_text {
  color: #0a2540;
  font-family: Montserrat;
  font-size: 13px;
  font-style: normal;
  font-weight: 400;
  line-height: 130%; /* 16.9px */
  margin: 0;
}
.contact-form__link {
  text-decoration: none;
  font-weight: 600;
  color: #325cc8;
  cursor: pointer;
}
.contact-form__link:hover {
  opacity: 0.8;
}
.color {
  color: darkred;
}
.textarea {
  height: 100px;
}
@media (min-width: 768px) and (max-width: 1024px) {
}
@media (min-width: 375px) and (max-width: 767px) {
}
@media (min-width: 320px) and (max-width: 374px) {
}
</style>
