import { createApp } from "vue/dist/vue.esm-bundler"

const app = createApp({})

import HelloWorldVue from "./components/HelloWorld.vue"
import EditButton from "./components/EditButton.vue"
import EditUserInfo from "./components/auth/EditUserInfo.vue"

app.component('hello-world', HelloWorldVue)
app.component('edit-button', EditButton)
app.component('edit-user-info', EditUserInfo)

app.mount('#app')
