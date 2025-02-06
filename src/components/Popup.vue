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
      <div v-if="request" class="popup_content">
        <PopupForm :request="request" />
      </div>
      <div v-else-if="contact" class="popup_content">
        <PopupForm :contact="contact" />
      </div>
    </div>
  </div>
</template>

<script setup lang="ts">
defineProps<{
  isOpen: boolean;
  closePopup: () => void;
  contact?: boolean;
  request?: boolean;
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
  align-items: center;
  max-width: 650px;
  width: 100%;
  height: auto;
  border-radius: 24px;
  background: var(--white, #fff);
  z-index: 9999;
  position: relative;
  padding: 40px 0;
}

.popup_content {
  display: flex;
  flex-direction: column;
  align-items: center;
  width: 426px;
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
@media (min-width: 320px) and (max-width: 680px) {
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
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    padding: 49px 20px 24px;
    height: 434px;
    border-radius: 24px;
    background: var(--white, #fff);
    z-index: 9999;
  }
  .popup_title {
    color: #181818;
    font-family: "Noto Sans";
    font-size: 24px;
    font-style: normal;
    font-weight: 700;
    line-height: 130%; /* 41.6px */
    padding-bottom: 30px;
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
</style>
