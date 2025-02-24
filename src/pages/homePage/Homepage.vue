<template>
  <PopupWithForm
    :isOpen="isPopupOpen"
    :closePopup="closePopup"
    :formType="formType"
    :content="popupContent"
  />
  <Intro />
  <Services />
  <Timeline />
  <OurProducts :openPopup="openPopup" />
  <Partnership :openPopup="openPopup" />
  <RetailPartners />
  <Advantages />
  <Faq :openPopup="openPopup" />
  <Vacancies />
  <Contacts />
  <Subscription />
</template>
<script lang="ts" setup>
import { FormType } from "@components/types";

const isPopupOpen = ref(false);
const formType = ref(FormType.REQUEST);
const popupContent = ref<{ title: string; text: string } | undefined>(
  undefined
);

const openPopup = (
  type: FormType,
  content?: { title: string; text: string }
) => {
  isPopupOpen.value = true;
  formType.value = type;
  popupContent.value = content;

  const body = document.querySelector("body");
  if (body) {
    body.classList.add("scroll-off");
  }
};

const closePopup = () => {
  isPopupOpen.value = false;
  const body = document.querySelector("body");
  if (body) {
    body.classList.remove("scroll-off");
  }
};
</script>
<style scoped></style>
