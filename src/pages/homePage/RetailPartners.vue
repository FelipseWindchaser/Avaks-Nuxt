<template>
  <section class="retail-partners">
    <div class="retail-partners__text-container">
      <h2 class="retail-partners__title">Наши партнеры в retail</h2>
      <p class="retail-partners__description">
        Мы работаем с сильными компаниями в российском ритейле. Наша модель
        сотрудничества — плотная интеграция в бизнес-процессы контрагента для
        достижения максимальной взаимной эффективности. <br />Таким образом мы
        достигаем высокие показатели продаж по sell-out.
      </p>
    </div>
    <Carousel :carouselContent="carouselContent" />
    <Carousel :carouselContent="reversedCarouselContent" />
    <RetailPartnersSlider :content="content" />
  </section>
</template>
<script setup lang="ts">
defineProps<{}>();
const carouselContent = [
  {
    image: "/our-partners-carousel/1_Mvideo.jpg",
    alt: "Mvideo_логотип",
    index: 1,
  },
  {
    image: "/our-partners-carousel/2_eldorado.jpg",
    alt: "eldorado_логотип",
    index: 2,
  },
  {
    image: "/our-partners-carousel/3_rbt.jpg",
    alt: "rbt_логотип",
    index: 3,
  },
  {
    image: "/our-partners-carousel/4_Vseinstrumenti.jpg",
    alt: "Vseinstrumenti_логотип",
    index: 4,
  },
  {
    image: "/our-partners-carousel/5_leroymerlin.jpg",
    alt: "leroymerlin_логотип",
    index: 5,
  },
  {
    image: "/our-partners-carousel/6_Detsky_mir.jpg",
    alt: "Detsky_mir_логотип",
    index: 6,
  },
  {
    image: "/our-partners-carousel/7_Золотое яблоко.jpg",
    alt: "Золотое яблоко_логотип",
    index: 7,
  },
  {
    image: "/our-partners-carousel/8_ozon.jpg",
    alt: "ozon_логотип",
    index: 8,
  },
  {
    image: "/our-partners-carousel/9_ya_market.jpg",
    alt: "ya_market_логотип",
    index: 9,
  },
  {
    image: "/our-partners-carousel/1_Mvideo.jpg",
    alt: "Mvideo_логотип",
    index: 1,
  },
  {
    image: "/our-partners-carousel/2_eldorado.jpg",
    alt: "eldorado_логотип",
    index: 2,
  },
  {
    image: "/our-partners-carousel/3_rbt.jpg",
    alt: "rbt_логотип",
    index: 3,
  },
  {
    image: "/our-partners-carousel/4_Vseinstrumenti.jpg",
    alt: "Vseinstrumenti_логотип",
    index: 4,
  },
  {
    image: "/our-partners-carousel/5_leroymerlin.jpg",
    alt: "leroymerlin_логотип",
    index: 5,
  },
  {
    image: "/our-partners-carousel/6_Detsky_mir.jpg",
    alt: "Detsky_mir_логотип",
    index: 6,
  },
  {
    image: "/our-partners-carousel/7_Золотое яблоко.jpg",
    alt: "Золотое яблоко_логотип",
    index: 7,
  },
  {
    image: "/our-partners-carousel/8_ozon.jpg",
    alt: "ozon_логотип",
    index: 8,
  },
  {
    image: "/our-partners-carousel/9_ya_market.jpg",
    alt: "ya_market_логотип",
    index: 9,
  },
];
const reversedCarouselContent = [
  {
    image: "/our-partners-carousel_reversed/1_Citilink.jpg",
    alt: "Citilink_логотип",
  },
  {
    image: "/our-partners-carousel_reversed/2_dns.jpg",
    alt: "dns_логотип",
  },
  {
    image: "/our-partners-carousel_reversed/3_Holodilnik.ru.jpg",
    alt: "Holodilnik.ru_логотип",
  },
  {
    image: "/our-partners-carousel_reversed/4_Azbuka_vkusa.jpg",
    alt: "Azbuka_vkusa_логотип",
  },
  {
    image: "/our-partners-carousel_reversed/5_sportmaster.png",
    alt: "sportmaster_логотип",
  },
  {
    image: "/our-partners-carousel_reversed/6_letual.jpg",
    alt: "letual_логотип",
  },
  {
    image: "/our-partners-carousel_reversed/7_wildberries.jpg",
    alt: "wildberries_логотип",
  },
  {
    image: "/our-partners-carousel_reversed/8_Megamarket-.jpg",
    alt: "Megamarket_логотип",
  },
  {
    image: "/our-partners-carousel_reversed/9_logo_5element.png",
    alt: "5element_логотип",
  },
  {
    image: "/our-partners-carousel_reversed/1_Citilink.jpg",
    alt: "Citilink_логотип",
  },
  {
    image: "/our-partners-carousel_reversed/2_dns.jpg",
    alt: "dns_логотип",
  },
  {
    image: "/our-partners-carousel_reversed/3_Holodilnik.ru.jpg",
    alt: "Holodilnik.ru_логотип",
  },
  {
    image: "/our-partners-carousel_reversed/4_Azbuka_vkusa.jpg",
    alt: "Azbuka_vkusa_логотип",
  },
  {
    image: "/our-partners-carousel_reversed/5_sportmaster.png",
    alt: "sportmaster_логотип",
  },
  {
    image: "/our-partners-carousel_reversed/6_letual.jpg",
    alt: "letual_логотип",
  },
  {
    image: "/our-partners-carousel_reversed/7_wildberries.jpg",
    alt: "wildberries_логотип",
  },
  {
    image: "/our-partners-carousel_reversed/8_Megamarket-.jpg",
    alt: "Megamarket_логотип",
  },
  {
    image: "/our-partners-carousel_reversed/9_logo_5element.png",
    alt: "5element_логотип",
  },
];
const content = [
  {
    image: "1_Mvideo.jpg",
    alt: "Mvideo_логотип",
    index: 1,
  },
  {
    image: "2_eldorado.jpg",
    alt: "eldorado_логотип",
    index: 2,
  },
  {
    image: "3_rbt.jpg",
    alt: "rbt_логотип",
    index: 3,
  },
  {
    image: "4_Vseinstrumenti.jpg",
    alt: "Vseinstrumenti_логотип",
    index: 4,
  },
  {
    image: "5_leroymerlin.jpg",
    alt: "leroymerlin_логотип",
    index: 5,
  },
  {
    image: "6_Detsky_mir.jpg",
    alt: "Detsky_mir_логотип",
    index: 6,
  },
  {
    image: "7_Золотое яблоко.jpg",
    alt: "Золотое яблоко_логотип",
    index: 7,
  },
  {
    image: "8_ozon.jpg",
    alt: "ozon_логотип",
    index: 8,
  },
  {
    image: "9_ya_market.jpg",
    alt: "ya_market_логотип",
    index: 9,
  },
  {
    image: "1_Citilink.jpg",
    alt: "Citilink_логотип",
  },
  {
    image: "2_dns.jpg",
    alt: "dns_логотип",
  },
  {
    image: "3_Holodilnik.ru.jpg",
    alt: "Holodilnik.ru_логотип",
  },
  {
    image: "4_Azbuka_vkusa.jpg",
    alt: "Azbuka_vkusa_логотип",
  },
  {
    image: "5_sportmaster.png",
    alt: "sportmaster_логотип",
  },
  {
    image: "6_letual.jpg",
    alt: "letual_логотип",
  },
  {
    image: "7_wildberries.jpg",
    alt: "wildberries_логотип",
  },
  {
    image: "8_Megamarket-.jpg",
    alt: "Megamarket_логотип",
  },
  {
    image: "9_logo_5element.png",
    alt: "5element_логотип",
  },
];
</script>
<style scoped>
.retail-partners {
  width: 100%;
  padding: 100px 160px;
  display: flex;
  flex-direction: column;
  gap: 100px;
}
.retail-partners__text-container {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  gap: 75px;
}
.retail-partners__title {
  max-width: 312px;
  color: var(--Color-Brand-black, #000);
  font-family: Montserrat;
  font-size: 36px;
  font-style: normal;
  font-weight: 600;
  line-height: normal;
}
.retail-partners__description {
  max-width: 679px;
  color: var(--500, #465564);
  font-family: Montserrat;
  font-size: 18px;
  font-style: normal;
  font-weight: 500;
  line-height: 140%;
}
@media (min-width: 1024px) and (max-width: 1280px) {
  .retail-partners {
    padding: 60px 60px;
    gap: 26px;
  }
  .retail-partners__text-container {
    flex-direction: column;
    gap: 20px;
  }
  .retail-partners__title {
    max-width: 100%;
    font-size: 28px;
  }
}
@media (min-width: 700px) and (max-width: 1023px) {
  .retail-partners {
    padding: 80px 60px 24px;
    gap: 26px;
  }
  .retail-partners__text-container {
    flex-direction: column;
    gap: 20px;
  }
  .retail-partners__title {
    max-width: 100%;
    font-size: 28px;
  }
}
@media (min-width: 375px) and (max-width: 699px) {
  .retail-partners {
    padding: 60px 20px 24px;
    gap: 50px;
  }
  .retail-partners__text-container {
    flex-direction: column;
    gap: 20px;
  }
  .retail-partners__title {
    max-width: 100%;
    font-size: 28px;
  }
}
@media (min-width: 320px) and (max-width: 374px) {
  .retail-partners {
    padding: 60px 20px 24px;
    gap: 50px;
  }
  .retail-partners__text-container {
    flex-direction: column;
    gap: 20px;
  }
  .retail-partners__title {
    max-width: 100%;
    font-size: 28px;
  }
}
</style>
