<template>
  <form
    v-if="props.request"
    class="form"
    name="request-form"
    @submit.prevent="submitForm"
  >
    <h2 class="form__title">Оставьте заявку</h2>
    <label class="form__form-label" for="fullname"
      >ФИО<span class="color">*</span></label
    >
    <input
      name="fullname"
      id="fullname"
      class="form__input"
      type="text"
      v-model="formData.fullname"
      required
    />
    <label class="form__form-label" for="company"
      >Компания<span class="color">*</span></label
    >
    <input
      name="company"
      id="company"
      class="form__input"
      type="text"
      v-model="formData.company"
      required
    />
    <label class="form__form-label" for="city"
      >Город<span class="color">*</span></label
    >
    <input
      name="city"
      id="city"
      class="form__input"
      type="text"
      v-model="formData.city"
      required
    />
    <label class="form__form-label" for="email"
      >Электронная почта<span class="color">*</span></label
    >
    <input
      name="email"
      id="email"
      class="form__input"
      type="email"
      v-model="formData.email"
      required
    />
    <label class="form__form-label" for="phone"
      >Телефон<span class="color">*</span></label
    >
    <input
      name="phone"
      id="phone"
      class="form__input"
      type="tel"
      v-model="formData.phone"
      required
    />
    <label class="form__form-label" for="content"
      >Тип продукции, дополнительная информация<span class="color">*</span>
    </label>
    <input
      name="content"
      id="content"
      class="form__input textarea"
      type="textarea"
      v-model="formData.content"
      required
    />
    <div class="form__checkbox_wrapper">
      <input class="form__checkbox" type="checkbox" id="checkbox" checked />
      <p class="form__checkbox_text">
        Я принимаю
        <a href="#" class="form__link"
          >условия передачи информации и обработки персональных данных</a
        >
      </p>
    </div>

    <button class="form__button" type="submit">Отправить</button>
  </form>

  <form
    v-else-if="props.contact"
    class="form"
    name="contact-form"
    @submit.prevent="submitForm"
  >
    <h2 class="form__title">Свяжитесь с нами</h2>
    <label class="form__form-label" for="fullname"
      >ФИО<span class="color">*</span></label
    >
    <input
      name="fullname"
      id="fullname"
      class="form__input"
      type="text"
      v-model="formData.fullname"
      required
    />
    <label class="form__form-label" for="email"
      >Электронная почта<span class="color">*</span></label
    >
    <input
      name="email"
      id="email"
      class="form__input"
      type="email"
      v-model="formData.email"
      required
    />
    <label class="form__form-label" for="phone"
      >Телефон<span class="color">*</span></label
    >
    <input
      name="phone"
      id="phone"
      class="form__input"
      type="tel"
      v-model="formData.phone"
      required
    />
    <label class="form__form-label" for="content"
      >Дополнительная информация<span class="color">*</span>
    </label>
    <input
      name="content"
      id="content"
      class="form__input textarea"
      type="textarea"
      v-model="formData.content"
      required
    />
    <div class="form__checkbox_wrapper">
      <input class="form__checkbox" type="checkbox" id="checkbox" checked />
      <p class="form__checkbox_text">
        Я принимаю
        <a href="#" class="form__link"
          >условия передачи информации и обработки персональных данных</a
        >
      </p>
    </div>
    <button class="form__button" type="submit">Отправить</button>
  </form>
</template>
<script setup lang="ts">
const props = defineProps<{ request?: boolean; contact?: boolean }>();
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

let pathToFile;

switch (true) {
  case props.request:
    pathToFile = "./request-form.php";
    break;
  case props.contact:
    pathToFile = "./contact-form.php";
    break;

  default:
    throw new Error(
      "Invalid form type: Either 'request' or 'contact' must be true."
    );
}

const submitForm = async () => {
  isSubmitting.value = true;
  try {
    const response = await fetch(pathToFile, {
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
.form {
  display: flex;
  flex-direction: column;
  gap: 12px;
}
.form__title {
  color: #0a2540;
  font-family: Montserrat;
  font-size: 28px;
  font-style: normal;
  font-weight: 600;
  line-height: normal;
  text-align: center;
  padding-bottom: 14px;
}
.form__button {
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
.form__button:hover {
  opacity: 0.7;
}
.form__form-label {
  color: #0a2540;
  font-size: 16px;
  font-style: normal;
  font-weight: 600;
  line-height: normal;
}
.form__input {
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
.form__input::placeholder {
  color: var(--grey-secondary, #b0b0b0);
  font-family: "Noto Sans";
  font-size: 15px;
  font-style: normal;
  font-weight: 400;
  line-height: normal;
}
.form__checkbox {
  align-self: flex-start;
  width: 40px;
  height: 40px;
  border-radius: 4px;
}
.form__checkbox:hover {
  cursor: pointer;
}
.form__checkbox_wrapper {
  display: flex;
  flex-direction: row;
  align-items: center;
  gap: 12px;
}
.form__checkbox_text {
  color: #0a2540;
  font-family: Montserrat;
  font-size: 13px;
  font-style: normal;
  font-weight: 400;
  line-height: 130%; /* 16.9px */
  margin: 0;
}
.form__link {
  text-decoration: none;
  font-weight: 600;
  color: #325cc8;
  cursor: pointer;
}
.form__link:hover {
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
