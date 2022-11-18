import { createApp } from "vue/dist/vue.esm-bundler"

const app = createApp({})

import HelloWorldVue from "./components/HelloWorld.vue"

app.component('hello-world', HelloWorldVue)

app.mount('#app')
