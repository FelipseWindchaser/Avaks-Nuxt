<template>
  <section class="timeline">
    <TimelineSlider :slideContent="slideContent" />
  </section>
</template>
<script setup lang="ts">
const slideContent = [
  {
    class: "slide-1",
    title: "2015",
    image: "slide-1.jpg",
    text: `Стартовал блок розничных продаж. На тот момент AVAKS был еще совсем
            небольшим локальным игроком на рынке гаджетов и бытовой техники.`,
  },
  {
    class: "slide-2",
    title: "2016",
    image: "slide-2.jpg",
    text: `Группа единомышленников оформилась как юридическое лицо и стартовала проект по продаже роботов-мойщиков окон. В этом году у AVAKS появились федеральные клиенты и был создан дивизион по работе с оптом (DNS, Азбука Вкуса).`,
  },
  {
    class: "slide-3",
    title: "2017",
    image: "slide-3.jpg",
    text: `Был запущен успешный проект по эксклюзивной дистрибуции инновационных 3D-ручек (Creopop.com), а также брендов HOBOT и iRobot. AVAKS впервые вышел на Wildberries. Стартовал проект по технической дистрибуции брендов Знатоком, Bissel, ECOVACS, Shokz, а также инновационных AI-роботов для детей Roobo.`,
  },
  {
    class: "slide-4",
    title: "2018",
    image: "slide-4.jpg",
    text: `Заключено партнерство с крупным английским брендом МБТ - Morphy Richards, AVAKS стал эксклюзивным дистрибьютором MR на рынке РФ. Впервые вышли на Ozon.`,
  },
  {
    class: "slide-5",
    title: "2019",
    image: "slide-5.jpg",
    text: `Стали эксклюзивным дистрибьютором бренда Noerden, начали работать с группой компаний Alibaba и TMALL. В портфель федеральных клиентов добавился Holodilnik.ru.`,
  },
  {
    class: "slide-6",
    title: "2020",
    image: "slide-6.jpg",
    text: `Cтали эксклюзивным представителем бренда ATVEL на территории стран ЕАЭС. Получили статус дистрибутора iLife и заключили партнерство с испанским производителем МБТ Cecotec Innovaciones S.L. в части эксклюзивных поставок на территорию РФ.`,
  },
  {
    class: "slide-7",
    title: "2021",
    image: "slide-7.jpg",
    text: `Запустили собственные логистические решения. В портфель федеральных клиентов вошли МВидео, РБТ, Связной. Стали эксклюзивным партнером бренда SteamOne на территории стран ЕАЭС. Разработали собственное ERP решение и внедрили PIM в IT-экосистему компании.`,
  },
  {
    class: "slide-8",
    title: "2022",
    image: "slide-8.jpg",
    text: `При сохранении предыдущий достижений, значительно расширили коммерческие партнерства с крупными сетевыми федеральными клиентами - Ситилинк, Детский Мир, Hoff, Leroy Merlin, МТС, проекты X5 Retail Group.`,
  },
  {
    class: "slide-9",
    title: "2023",
    image: "slide-9.jpg",
    text: `Компания успешно адаптировалась к новым геополитическим и макроэкономическим условиям и достигла новых вершин, обеспечив выручку больше 1 млрд. рублей.`,
  },
];
</script>
<style scoped>
.timeline {
  width: 100%;
  /* height: 544px; */
  position: relative;
  z-index: 3;
}

@media (min-width: 768px) and (max-width: 1024px) {
}
@media (min-width: 375px) and (max-width: 767px) {
}
@media (min-width: 320px) and (max-width: 374px) {
}
</style>
