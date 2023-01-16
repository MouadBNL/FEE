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
import EditStudentSummary from "./components/auth/student/EditSummary.vue"
import EditStudentExperiences from "./components/auth/student/EditExperiences.vue"
import EditStudentEducation from "./components/auth/student/EditEducation.vue"
import EditStudentProjects from "./components/auth/student/EditProjects.vue"
import EditStudentCertifications from "./components/auth/student/EditCertifications.vue"
import EditStudentCv from "./components/auth/student/EditCv.vue"
import EditStudentContact from "./components/auth/student/EditContact.vue"

import EditCompanyAbout from "./components/auth/company/EditAbout.vue"
import EditCompanyDescription from "./components/auth/company/EditDescription.vue"

app.component('hello-world', HelloWorldVue)
app.component('edit-button', EditButton)
app.component('edit-user-info', EditUserInfo)

/**
 * Student Profile components
 */
app.component('edit-student-links', EditStudentLinks)
app.component('edit-student-hobbies', EditStudentHobbies)
app.component('edit-student-skills', EditStudentSkills)
app.component('edit-student-languages', EditStudentLanguages)
app.component('edit-student-summary', EditStudentSummary)
app.component('edit-student-experiences', EditStudentExperiences)
app.component('edit-student-education', EditStudentEducation)
app.component('edit-student-projects', EditStudentProjects)
app.component('edit-student-certifications', EditStudentCertifications)
app.component('edit-student-cv', EditStudentCv)
app.component('edit-student-contact', EditStudentContact)

/**
 * Company Profile components
 */
app.component('edit-company-about', EditCompanyAbout)
app.component('edit-company-description', EditCompanyDescription)

app.component('n-config-provider', NConfigProvider)

app.mount('#app')
