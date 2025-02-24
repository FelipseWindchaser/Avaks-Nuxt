<template>
  <section class="faq" id="faq">
    <div class="faq__wrapper">
      <div class="faq__text-container">
        <h2 class="faq__title">Часто задаваемые вопросы</h2>
        <p class="faq__text">
          В этом разделе вы найдете ответы на часто задаваемые вопросы о наших
          продуктах, условиях гарантии и процессах покупки. Мы стремимся
          обеспечить вас всей необходимой информацией, чтобы помочь сделать
          осознанный выбор.
        </p>
      </div>
      <div class="faq_accordion-wrapper_mob">
        <Accordion :elements="elements" :defaultOpenedElementId="'fq_1'" />
      </div>
      <div class="faq__text-container">
        <h2 class="faq__title">Остались вопросы?</h2>
        <p class="faq__text">
          Если у вас остались вопросы, которые требуют уточнения, или нужна
          дополнительная информация, пожалуйста, напишите нам. Наши специалисты
          с радостью ответят на любые вопросы и предоставят необходимую
          поддержку.
        </p>
        <div class="faq_button-container">
          <ContactButton :openPopup="() => openPopup(FormType.CONTACT)" />
        </div>
      </div>
    </div>
    <div class="faq_accordion-wrapper_pc">
      <Accordion :elements="elements" :defaultOpenedElementId="'fq_1'" />
    </div>
  </section>
</template>
<script setup lang="ts">
import { FormType } from "@components/types";
defineProps<{
  openPopup: (type: FormType) => void;
}>();
const elements = [
  {
    id: "fq_1",
    title: "Осуществляете ли доставку по Москве?",
    content:
      "Да, мы осуществляем бесплатную доставку по Москве при заказе от 100 тысяч рублей. Также возможен самовывоз каждый день с 8:00 до 20:00.",
  },
  {
    id: "fq_2",
    title: "Могу ли я получить консультацию по вашим товарам онлайн?",
    content:
      "Конечно, наши специалисты доступны для онлайн-консультаций ежедневно с 9:00 до 21:00.",
  },
  {
    id: "fq_3",
    title: "Проводится ли очное обучение для продавцов?",
    content:
      "У нас разработаны методики обучения которые могут применять ваши тренеры самостоятельно,  также возможно и очное обучение продавцов как на вашей территории, так и в отдельных обучающих центрах, подробности вы можете узнать у вашего персонального менеджера.",
  },
  {
    id: "fq_4",
    title: "Где находятся ваши склады?",
    content: "Наши склады расположены в Москве, Алматы и Ереване.",
  },
  {
    id: "fq_5",
    title: "Предоставляется ли персональный менеджер?",
    content:
      "Каждому клиенту предоставляется персональный менеджер, который обработает ваш заказ в течение часа.",
  },
  {
    id: "fq_6",
    title: "Могу ли я вернуть товар?",
    content:
      "Возврат товара возможен, подробности уточняйте у персонального менеджера.",
  },
  {
    id: "fq_7",
    title: "Работаете ли вы по ЭДО?",
    content:
      "Да, мы работаем по системе электронного документооборота (ЭДО), что упрощает и ускоряет процесс оформления заказов.",
  },
  {
    id: "fq_8",
    title: "Можете ли вы передавать остатки по API?",
    content:
      "Да, мы предоставляем данные об остатках через API для упрощения управления запасами.",
  },
  {
    id: "fq_9",
    title: "Вы сопровождаете выход на российские Маркетплейсы?",
    content:
      "Да, мы предоставляем полный комплекс услуг для вывода товаров на основные  маркетплейсы РФ, Казахстана и Армении.",
  },
];
</script>
<style scoped>
.faq {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  width: 100%;
  padding: 100px 160px;
}
.faq__wrapper {
  display: flex;
  flex-direction: column;
  gap: 47px;
}
.faq__text-container {
  display: flex;
  flex-direction: column;
  gap: 16px;
}
.faq_button-container {
  padding-top: 20px;
  max-width: 270px;
  width: 100%;
}
.faq__title {
  color: #0a2540;
  font-family: Montserrat;
  font-size: 36px;
  font-style: normal;
  font-weight: 600;
  line-height: normal;
}
.faq__text {
  color: var(--500, #465564);
  font-family: Montserrat;
  font-size: 18px;
  font-style: normal;
  font-weight: 500;
  line-height: 140%; /* 25.2px */
  max-width: 599px;
}
.faq_accordion-wrapper_mob {
  display: none;
  max-width: 925px;
  width: 100%;
}
.faq_accordion-wrapper_pc {
  max-width: 925px;
  width: 100%;
}
@media (min-width: 1440px) and (max-width: 1919px) {
  .faq {
    gap: 76px;
  }
  .faq_accordion-wrapper_pc {
    max-width: 825px;
    width: 100%;
  }
}
@media (min-width: 1024px) and (max-width: 1439px) {
  .faq_accordion-wrapper_pc {
    display: none;
  }
  .faq_accordion-wrapper_mob {
    display: block;
    max-width: 100%;
  }
  .faq {
    justify-content: center;
  }
  .faq__text {
    max-width: 100%;
  }
}
@media (min-width: 768px) and (max-width: 1023px) {
  .faq_accordion-wrapper_pc {
    display: none;
  }
  .faq_accordion-wrapper_mob {
    display: block;
    max-width: 100%;
  }
  .faq {
    justify-content: center;
    padding: 80px 60px;
  }
  .faq__text {
    max-width: 100%;
  }
  .faq__title {
    font-size: 28px;
  }
}

@media (min-width: 500px) and (max-width: 767px) {
  .faq {
    justify-content: center;
    padding: 60px 20px;
  }
  .faq__title {
    font-size: 28px;
    text-align: left;
  }
  .faq__text {
    max-width: 100%;
    text-align: left;
  }
  .faq_accordion-wrapper_pc {
    display: none;
  }
  .faq_accordion-wrapper_mob {
    display: block;
    max-width: 100%;
  }
  .faq__text-container {
    align-items: flex-start;
  }
}
@media (min-width: 320px) and (max-width: 499px) {
  .faq {
    justify-content: center;
    padding: 60px 20px;
  }
  .faq__title {
    font-size: 28px;
    text-align: center;
  }
  .faq__text {
    max-width: 100%;
    text-align: center;
  }
  .faq_accordion-wrapper_pc {
    display: none;
  }
  .faq_accordion-wrapper_mob {
    display: block;
    max-width: 100%;
  }
  .faq__text-container {
    align-items: center;
  }
}
</style>
