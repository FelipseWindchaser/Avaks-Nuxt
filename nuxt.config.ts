// https://nuxt.com/docs/api/configuration/nuxt-config
import { defineNuxtConfig } from "nuxt/config";
import { fileURLToPath } from 'node:url';

export default defineNuxtConfig({
  compatibilityDate: "2024-04-03",
  devtools: { enabled: true },

  app: {
    rootAttrs: {
      class: "main",
    },
    head: {
      title: "АВАКС — новые точки соприкосновения.",
      meta: [{}],
    },
  },

  components: [
    {
      path: "src/components",
      pathPrefix: false,
    },
    {
      path: "src/pages",
      pathPrefix: false,
    },
  ],

  alias: {
    "@src": fileURLToPath(new URL('./src', import.meta.url)),
    "@components": fileURLToPath(new URL("./src/components", import.meta.url)),
    "@img": fileURLToPath(new URL("./static/img", import.meta.url)),
    "@style": fileURLToPath(new URL("./static/css", import.meta.url)),
  },
});
