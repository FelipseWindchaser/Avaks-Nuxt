<template>
  <div :class="['popup', isOpen && 'active']">
    <div class="popup_overlay" @click="closePopup"></div>
    <div class="popup_wrapper">
      <svg
        @click="closePopup"
        class="popup_cross-icon"
        xmlns="http://www.w3.org/2000/svg"
        width="42"
        height="42"
        viewBox="0 0 42 42"
        fill="none"
      >
        <path
          d="M8.75 8.75L33.25 33.25"
          stroke="#B8B8B8"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
        />
        <path
          d="M33.25 8.75L8.75 33.25"
          stroke="#B8B8B8"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
        />
      </svg>

      <div v-if="formType === FormType.CARDS" class="popup_card-content">
        <h3 class="popup_title">{{ content?.title }}</h3>
        <p class="popup_text">{{ content?.text }}</p>
      </div>
      <div v-else class="popup_content">
        <PopupForm
          v-if="isOpen"
          :pathToFile="formType"
          :closePopup="closePopup"
        />
      </div>
    </div>
  </div>
</template>

<script setup lang="ts">
import { FormType } from "@components/types";
defineProps<{
  isOpen: boolean;
  closePopup: () => void;
  formType: FormType;
  content?: { title: string; text: string };
}>();
</script>

<style scoped>
.popup {
  display: none;
  justify-content: center;
  align-items: center;
  width: 100vw;
  height: 100vh;
  /* position: absolute; */
  position: fixed;
  z-index: 9999;
  overflow-y: auto;

  /* background-color: #000; */
}
.popup_overlay {
  background-color: #000c;
  opacity: 0.5;
  width: 100vw;
  height: 100vh;
  position: absolute;
  z-index: 999;
}
.popup_wrapper {
  display: flex;
  justify-content: center;
  /* align-items: center; */
  max-height: 100vh;
  height: min-content;
  border-radius: 24px;
  background: var(--white, #fff);
  z-index: 9999;
  position: relative;
  padding: 60px;
  overflow-y: auto;
}

.popup_content {
  display: flex;
  flex-direction: column;
  align-items: center;
  max-width: 500px;
}
.popup_card-content {
  display: flex;
  flex-direction: column;
  align-items: center;
  max-width: 740px;
  height: 500px;
  padding: 40px;
}
.active {
  display: flex;
}
.popup_cross-icon {
  position: absolute;
  top: 17px;
  right: 17px;
}
.popup_cross-icon:hover {
  cursor: pointer;
  opacity: 0.7;
}
.popup_title {
  color: #0a2540;
  font-size: 22px;
  padding-bottom: 20px;
}
.popup_text {
  color: #465564;
  font-family: "Montserrat";
  font-size: 18px;
  font-style: normal;
  font-weight: 500;
  line-height: 130%; /* 41.6px */
  padding-bottom: 30px;
  text-align: left;
  white-space: pre-wrap;
}
@media (min-width: 500px) and (max-width: 680px) {
  .popup {
    display: none;
    justify-content: center;
    align-items: center;
    width: 100vw;
    height: 100vh;
    padding: 0 16px;
  }
  .active {
    display: flex;
  }
  .popup_overlay {
    background-color: #000c;
    opacity: 0.5;
    width: 100vw;
    height: calc(100vh + 200px);
    position: absolute;
    z-index: 999;
  }
  .popup_wrapper {
    padding: 49px 30px 40px;
    height: min-content;
    max-height: 100vh;
    overflow-y: auto;
  }

  .popup_form-checkbox {
    align-self: center;
  }
  .popup_form-button {
    font-size: 18px;
  }
  .popup_cross-icon {
    position: absolute;
    top: 13px;
    right: 13px;
    width: 30px;
    height: 30px;
  }
}
@media (min-width: 320px) and (max-width: 499px) {
  .popup {
    display: none;
    justify-content: center;
    align-items: center;
    width: 100vw;
    max-height: 100vh;
    padding: 0 16px;
  }
  .active {
    display: flex;
  }
  .popup_overlay {
    background-color: #000c;
    opacity: 0.5;
    width: 100vw;
    height: calc(100vh + 200px);
    position: absolute;
    z-index: 999;
  }
  .popup_wrapper {
    padding: 49px 30px 40px;
    max-height: 100vh;
    height: min-content;
    overflow-y: auto;
  }

  .popup_form-checkbox {
    align-self: center;
  }
  .popup_form-button {
    font-size: 15px;
  }
  .popup_cross-icon {
    position: absolute;
    top: 13px;
    right: 13px;
    width: 30px;
    height: 30px;
  }
}
</style>
