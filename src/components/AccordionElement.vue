<template>
  <div class="accordion_card">
    <div class="accordion_card-content">
      <div
        class="accordion_card_text-container"
        :id="id"
        @click="() => handleClick(id)"
      >
        <p class="accordion_card-question">
          <!-- Какая стоимость за использование фулфилмента на маркетплейсах? -->
          {{ title }}
        </p>
        <img
          :class="['accordion_card-icon', isOpen && 'rotated-icon']"
          src="../../static/img/homepage/icons/arrow-down.svg"
          alt="иконка_стрелка"
        />
      </div>
      <p :class="['accordion_card-answer', !isOpen && 'hidden-answer']">
        <!-- Стоимость можете уточнить у наших операторов. -->
        {{ content }}
      </p>
    </div>
  </div>
</template>

<script setup lang="ts">
defineProps<{
  id: string;
  title: string;
  content: string;
  handleClick: (id: string) => void;
  isOpen: boolean;
}>();
</script>
<style scoped>
.accordion_card {
  display: flex;
  justify-content: center;
  align-items: flex-start;
  padding: 0;
  /* max-width: 925px; */
  width: 100%;
  cursor: pointer;
}
.accordion_card-content {
  align-items: flex-start;
  /* max-width: 925px; */
  width: 100%;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}
.rotated-icon {
  transform: rotate(180deg);
  padding: 0 10px 0 0 !important;
}
.accordion_card-icon {
  padding-left: 10px;
}
.accordion_card_text-container {
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: space-between;
  /* max-width: 925px; */
  width: 100%;
  padding: 24px 32px;
  border: 1px solid #f3f3f3;
}
.accordion_card-question {
  color: #0a2540;
  font-family: Montserrat;
  font-size: 20px;
  font-style: normal;
  font-weight: 600;
  line-height: 28px;
  margin: 0;
}
.accordion_card-answer {
  color: var(--500, #465564);
  font-family: Montserrat;
  font-size: 15px;
  font-style: normal;
  font-weight: 500;
  line-height: 150%;
  margin: 0;
  cursor: text;
  padding: 24px 32px 24px;
  background: #f7f9fc;
  max-width: 925px;
  width: 100%;
}
.hidden-answer {
  display: none;
}
@media (min-width: 320px) and (max-width: 1023px) {
  .accordion_card-question {
    font-size: 15px;
  }
  .accordion_card_text-container {
    padding: 16px 20px;
  }
}
/* @media (min-width: 375px) and (max-width: 767px) {
  .accordion_card-question {
    font-size: 15px;
  }
}

@media (min-width: 320px) and (max-width: 374px) {
  .accordion_card-question {
    font-size: 15px;
  }
  .accordion_card_text-container {
    padding: 16px 20px;
  }
} */
</style>
