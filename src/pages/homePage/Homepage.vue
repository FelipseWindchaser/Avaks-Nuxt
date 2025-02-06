<template>
  <Popup
    :isOpen="isPopupOpen"
    :closePopup="closePopup"
    :request="request"
    :contact="contact"
  />
  <Intro />
  <Services />
  <Timeline />
  <OurProducts />
  <Partnership :openPopup="openPopup" :request="request" :contact="contact" />
  <RetailPartners />
  <Advantages />
  <Faq :openPopup="openPopup" :request="request" :contact="contact" />
  <Vacancies />
  <Contacts />
  <Subscription />
</template>
<script lang="ts" setup>
const isPopupOpen = ref(false);
const request = ref(false);
const contact = ref(false);
const openPopup = (event: any) => {
  isPopupOpen.value = true;

  const button = event.target;
  const section = button.closest("section");

  if (section?.id === "partnership") {
    request.value = true;
    contact.value = false;
    console.log({ request: request.value, contact: contact.value });
  }
  if (section?.id !== "partnership") {
    request.value = false;
    contact.value = true;
    console.log({ request: request.value, contact: contact.value });
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
