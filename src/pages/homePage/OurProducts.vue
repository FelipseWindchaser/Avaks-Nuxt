<template>
  <section class="our-products" id="our-products">
    <h2 class="our-products__title">
      Откройте для себя наш ассортимент техники
    </h2>
    <div class="our-products__cards">
      <div
        v-for="card in cardContent"
        class="our-products__card"
        @click="
          () =>
            openPopup(FormType.CARDS, {
              title: card.title,
              text: card.fullText,
            })
        "
      >
        <img
          class="our-products__card-icon"
          :src="`/product-icons/${card.icon}`"
          :alt="`${card.iconAlt}`"
        />
        <div class="our-products__card-text-container">
          <p class="our-products__card-title" id="title">{{ card.title }}</p>
          <p class="our-products__card-text">
            {{ card.text }}
          </p>
          <div class="our-products__card-popup-text hidden">
            <p class="our-products__card-text" id="text">
              {{ card.fullText }}
            </p>
          </div>
        </div>
      </div>
    </div>
    <OurProductsSlider :slideContent="cardContent" />
  </section>
</template>
<script setup lang="ts">
import { FormType } from "@components/types";
defineProps<{
  openPopup: (
    type: FormType,
    content?: { title: string; text: string }
  ) => void;
}>();
const cardContent = [
  {
    icon: "robots_g1.svg",
    iconAlt: "Роботы-пылесосы",
    title: "Роботы-пылесосы",
    text: "Роботы-пылесосы ATVEL — автоматизированные решения для уборки, которые упрощают задачи поддержания чистоты в доме.",
    fullText: `Роботы-пылесосы для домашней уборки от бренда ATVEL оснащены функциями сухой и влажной уборки, что делает их многофункциональными помощниками в доме.\n\nМодель ATVEL R80 упрощает очистку различных поверхностей, обладая функциями как сухой, так и влажной уборки. Это позволяет ему эффективно справляться с загрязнениями на любых поверхностях.\n\nРоботы оснащены навигационными системами для избегания препятствий и автоматической зарядкой, благодаря чему могут самостоятельно возвращаться на базу для подзарядки.`,
  },
  {
    icon: "audio_g2.svg",
    iconAlt: "Портативная аудио техника",
    title: "Портативная аудио техника",
    text: "Eksa, MOJAWA и Havit представляют портативные аудиоустройства с превосходным качеством звука и удобством использования.",
    fullText: `Eksa, MOJAWA и Havit предлагают высококачественные портативные аудиоустройства с отличным звучанием и удобством использования. Благодаря высокому качеству, стильному дизайну и разумной цене, эти продукты доступны для широкой аудитории.\n\nБеспроводные наушники TWS HAVIT TW967 отличаются своей функциональностью и элегантным дизайном. Они оснащены передовыми технологиями шумоподавления, что обеспечивает чистый звук даже в шумной обстановке.\n\nУдобная конструкция гарантирует комфорт при длительном ношении, а совместимость с Bluetooth облегчает подключение к различным устройствам.`,
  },
  {
    icon: "kitchen_g3.svg",
    iconAlt: "Техника для кухни",
    title: "Техника для кухни",
    text: "Morphy Richards предлагает кухонные решения, которые полностью трансформируют процесс готовки, делая его быстрым, удобным и энергоэффективным.",
    fullText: `Morphy Richards предлагает разнообразные кухонные гаджеты: шнековые соковыжималки, слайсеры и умного кухонного робота KitchenBot M1 с 50 функциями для приготовления вкусных блюд.\n\n‍Техника ATVEL создана, чтобы облегчить жизнь и позволить наслаждаться любимыми занятиями.\n\nKitchenBot M1 автоматизирует процессы нарезки, смешивания и замешивания теста, адаптируя готовку под ваши предпочтения и потребности. Модель оснащена 18 предустановленными программами для выполнения различных кулинарных операций. Устройство также имеет функцию самоочистки и промывки продуктов, позволяя готовить до четырех блюд одновременно.`,
  },
  {
    icon: "toys_g4.svg",
    iconAlt: "Развивающие игрушки для детей",
    title: "Развивающие игрушки для детей",
    text: "Smartivity — бренд, предлагающий развивающие деревянные конструкторы для детей и их родителей. Конструкторы STEAM развивают моторику, рефлексы и мышление.",
    fullText: `Smartivity — бренд, который предлагает широкий выбор развивающих деревянных конструкторов для детей и их родителей. Конструкторы STEAM способствуют развитию моторики, рефлексов и мышления у детей.\n\nЭтот бренд завоевал доверие родителей и любовь детей в 33 странах благодаря своим обучающим конструкторам из дерева, которые легко собираются и разбираются с помощью детальных инструкций и видеоуроков, разработанных с учётом возрастных особенностей.\n\nПинбол Smartivity раскрывает потенциал ребёнка. Эта развивающая игрушка превращает обучение в увлекательное приключение. Она помогает детям изучать STEM-концепции, развивает мелкую моторику и творческие способности.`,
  },
  {
    icon: "vertical_g5.svg",
    iconAlt: "Вертикальные пылесосы",
    title: "Вертикальные пылесосы",
    text: "Вертикальные пылесосы ATVEL с функцией самоочистки и УФ-стерилизации — лёгкие и маневренные, гарантируют безупречную чистоту.",
    fullText: `Вертикальные пылесосы с функциями сухой и влажной уборки — идеальное решение для дома.\n\n‍Серия пылесосов F16 предлагает широкий спектр возможностей: сухая и влажная уборка, дезинфекция и удаление шерсти домашних животных с ковровых покрытий.\n\nATVEL F16 FastClean — беспроводной пылесос, который отличается лёгкостью и манёвренностью, обеспечивая высокую мощность всасывания благодаря мощному двигателю. Этот пылесос идеально подходит для быстрой и тщательной уборки, легко переключается между разными поверхностями. Компактный и лёгкий, он позволяет проводить уборку по всему дому без частой подзарядки благодаря мощной батарее.`,
  },
  {
    icon: "steamers_g6.svg",
    iconAlt: "Отпариватели для одежды",
    title: "Отпариватели для одежды",
    text: "SteamOne — французский бренд высококачественных отпаривателей для одежды, предлагает идеальное решение для тех, кто стремится к безупречному стилю.",
    fullText: `Отпариватели SteamOne предназначены для того, чтобы сделать уход за одеждой проще и эффективнее. Они обеспечивают быстрое и бережное разглаживание складок благодаря мощной подаче пара и регулируемым режимам работы.\n\nМодель EUES200B от SteamOne особенно выделяется среди них. Модель имеет мощность 2000 Вт и способна подавать пар мощностью 45 г/мин, что позволяет быстро и легко разглаживать складки на различных типах ткани. Три режима работы, включая специальный режим для льна и бережный режим для деликатных тканей, делают устройство универсальным решением для любых потребностей.`,
  },
  {
    icon: "accessories_g7.svg",
    iconAlt: "Аксессуары",
    title: "Аксессуары",
    text: "Аксессуары Havit обеспечивают надёжность и долговечность, соответствуют стандартам качества, повышая комфорта в повседневной жизни.",
    fullText: `HAVIT предлагает широкий спектр аксессуаров, включая портативные зарядные устройства, кабели, подставки для смартфонов и штативы.\n\nHAVIT PB5203 SL с ёмкостью 10 000 мАч обеспечивает быструю беспроводную зарядку с поддержкой MagSafe, что облегчает зарядку устройств Apple. Благодаря магнитной функции, он легко прикрепляется к совместимым устройствам, обеспечивая стабильное и безопасное соединение.`,
  },
  {
    icon: "computer_g8.svg",
    iconAlt: "Компьютерная периферия",
    title: "Компьютерная периферия",
    text: "Lofree представляет высококачественные компьютерные аксессуары для элегантного обустройства рабочего пространства.",
    fullText: `Компания Lofree предлагает высококачественную компьютерную периферию, разработанную для обеспечения комфорта и стильного оформления рабочего пространства.\n\nБренд стремится удовлетворить потребности пользователей, предоставляя функциональные и эстетически привлекательные продукты. Продукция Lofree обеспечивает сенсорные возможности для тактильного, визуального и аудиального восприятия.\n\nБеспроводные клавиатуры, мыши и аксессуары от Lofree — это произведения искусства, которые украшают рабочее пространство благодаря своему уникальному дизайну и индивидуальности.`,
  },
];
</script>
<style scoped>
.hidden {
  display: none;
}
.our-products {
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 100px 0;
  gap: 50px;
}
.our-products__title {
  color: var(--Dark-Blue, #000c2a);
  text-align: center;
  font-family: Montserrat;
  font-size: 36px;
  font-style: normal;
  font-weight: 600;
  line-height: normal;
}
.our-products__cards {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  gap: 20px;
}
.our-products__card {
  display: flex;
  flex-direction: column;
  max-width: 520px;
  padding: 33px 34px;
  gap: 24px;
  border-radius: 7px;
  background: var(--50, #f1f2f5);
  cursor: pointer;
}
.our-products__card:hover {
  background: rgba(211, 214, 224, 0.7);
}
.our-products__card-icon {
  width: 82px;
  height: 82px;
}
.our-products__card-text-container {
  display: flex;
  flex-direction: column;
  gap: 12px;
}
.our-products__card-title {
  color: var(--Dark-Blue, #000c2a);
  font-family: Montserrat;
  font-size: 20px;
  font-style: normal;
  font-weight: 600;
  line-height: 120%; /* 24px */
}
.our-products__card-text {
  color: var(--500, #465564);
  font-family: Montserrat;
  font-size: 18px;
  font-style: normal;
  font-weight: 500;
  line-height: 24px; /* 133.333% */
  letter-spacing: 0.036px;
}
@media (min-width: 1024px) and (max-width: 1919px) {
  .our-products__cards {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
  }
  .our-products {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 80px 60px;
    gap: 50px;
  }
}
@media (min-width: 768px) and (max-width: 1023px) {
  .our-products {
    align-items: flex-start;
    padding: 60px;
  }
  .our-products__cards {
    display: none;
  }
  .our-products__title {
    color: #0a2540;
    font-family: Montserrat;
    font-size: 28px;
    font-style: normal;
    font-weight: 600;
    line-height: normal;
    max-width: 587px;
    text-align: left;
  }
}
@media (min-width: 540px) and (max-width: 767px) {
  .our-products {
    align-items: flex-start;
    padding: 60px;
  }
  .our-products__cards {
    display: none;
  }
}
@media (min-width: 320px) and (max-width: 539px) {
  .our-products {
    align-items: flex-start;
    padding: 60px 20px;
  }
  .our-products__cards {
    display: none;
  }
  .our-products__title {
    font-size: 28px;
  }
}
</style>
