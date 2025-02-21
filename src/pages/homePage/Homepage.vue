<template>
  <PopupWithForm
    :isOpen="isPopupOpen"
    :closePopup="closePopup"
    :request="request"
    :contact="contact"
    :cards="cards"
    :popupTitle="popupTitle"
    :popupText="popupText"
  />
  <Intro />
  <Services />
  <Timeline />
  <OurProducts :openPopup="openPopup" :cards="cards" />
  <Partnership :openPopup="openPopup" :request="request" />
  <RetailPartners />
  <Advantages />
  <Faq :openPopup="openPopup" :contact="contact" />
  <Vacancies />
  <Contacts />
  <Subscription />
</template>
<script lang="ts" setup>
const isPopupOpen = ref(false);
const request = ref(false);
const contact = ref(false);
const cards = ref(false);
let popupTitle = ref("");
let popupText = ref("");
const openPopup = (event: any) => {
  isPopupOpen.value = true;

  const button = event.target;
  const section = button.closest("section");

  if (section?.id === "partnership") {
    request.value = true;
    contact.value = false;
    // console.log({ request: request.value, contact: contact.value });
  }
  if (section?.id === "faq") {
    request.value = false;
    contact.value = true;
    // console.log({ request: request.value, contact: contact.value });
  }
  if (section?.id === "our-products") {
    request.value = false;
    contact.value = false;
    cards.value = true;

    popupTitle = event.currentTarget.querySelector("#title")?.textContent || "";
    popupText = event.currentTarget.querySelector("#text")?.textContent || "";

    // console.log({
    //   request: request.value,
    //   contact: contact.value,
    //   title: popupTitle,
    //   text: popupText,
    // });
  }

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
