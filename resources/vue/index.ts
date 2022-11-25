import { createApp } from "vue/dist/vue.esm-bundler"
import { NConfigProvider } from "naive-ui"

const app = createApp({})

import HelloWorldVue from "./components/HelloWorld.vue"
import EditButton from "./components/EditButton.vue"
import EditUserInfo from "./components/auth/EditUserInfo.vue"

import EditStudentLinks from "./components/auth/student/EditLinks.vue"
import EditStudentHobbies from "./components/auth/student/EditHobbies.vue"
import EditStudentSkills from "./components/auth/student/EditSkills.vue"
import EditStudentLanguages from "./components/auth/student/EditLanguages.vue"

app.component('hello-world', HelloWorldVue)
app.component('edit-button', EditButton)
app.component('edit-user-info', EditUserInfo)

/**
 * Student Profile component
 */
app.component('edit-student-links', EditStudentLinks)
app.component('edit-student-hobbies', EditStudentHobbies);
app.component('edit-student-skills', EditStudentSkills);
app.component('edit-student-languages', EditStudentLanguages);

app.component('n-config-provider', NConfigProvider);

app.mount('#app')
