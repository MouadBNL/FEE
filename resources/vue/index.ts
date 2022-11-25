import { createApp } from "vue/dist/vue.esm-bundler"

const app = createApp({})

import HelloWorldVue from "./components/HelloWorld.vue"
import EditButton from "./components/EditButton.vue"
import EditUserInfo from "./components/auth/EditUserInfo.vue"

import EditStudentLinks from "./components/auth/student/EditLinks.vue"
import EditStudentHobbies from "./components/auth/student/EditHobbies.vue"

app.component('hello-world', HelloWorldVue)
app.component('edit-button', EditButton)
app.component('edit-user-info', EditUserInfo)

/**
 * Student Profile component
 */
app.component('edit-student-links', EditStudentLinks)
app.component('edit-student-hobbies', EditStudentHobbies);

app.mount('#app')
