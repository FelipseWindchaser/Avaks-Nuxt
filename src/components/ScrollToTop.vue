<template>
  <Transition name="fade">
    <a
      v-show="isVisible"
      @click.prevent="scrollToTop"
      class="scroll-to-top-btn"
    >
      <img src="../../static/img/homepage/icons/arrow-up.svg" />
    </a>
  </Transition>
</template>

<script setup lang="ts">
import { useRouter } from "vue-router";
import { ref, onMounted, onUnmounted } from "vue";
const router = useRouter();

const isVisible = ref(false);

const handleScroll = () => {
  isVisible.value = window.scrollY > 200; // scroll after 200
};

const scrollToTop = () => {
  window.scrollTo({ top: 0, behavior: "smooth" });
  setTimeout(() => {
    router.push("");
  }, 1000);
  //adjust the value on content growth
};

onMounted(() => {
  window.addEventListener("scroll", handleScroll);
});

onUnmounted(() => {
  window.removeEventListener("scroll", handleScroll);
});
</script>

<style scoped>
.scroll-to-top-btn {
  position: fixed;
  z-index: 9;
  bottom: 20px;
  right: 20px;
  width: 50px;
  height: 50px;
  display: flex;
  justify-content: center;
  align-items: center;
  background: #325cc8;
  color: white;
  border: 2px solid rgba(255, 255, 255, 0.8);
  border-radius: 50%;
  cursor: pointer;
  font-size: 20px;
  box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
  transition: opacity 0.3s ease-in-out;
}

.scroll-to-top-btn:hover {
  background: #325cc8;
  opacity: 0.7;
}

/* Fade transition */
.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.3s;
}
.fade-enter,
.fade-leave-to {
  opacity: 0;
}
@media (min-width: 375px) and (max-width: 768px) {
  .scroll-to-top {
    display: none;
  }
}
</style>
