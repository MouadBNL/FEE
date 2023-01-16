<template>
    <n-card title="Modifier vos informations utilisateur" :bordered="false" size="huge" role="dialog" aria-modal="true">


        <h3 class="font-bold text-gr-800 mb-4">Photo de profil</h3>
        <div class="flex gap-8 items-center">
            <div class="flex-shrink-0 flex-grow-0">
                <img class="blok h-24 w-24 rounded-full object-cover" :src="currentPicture" alt="profile-picture">
            </div>
            <n-upload ref="picture" action="/api/profile/picture" :custom-request="editProfilePicture" :multiple="false"
                :show-file-list="false" accept=".jpeg,.png,.jpg">
                <n-button :loading="pictureIsLoading">Sélectionnez une image</n-button>
            </n-upload>
        </div>

        <!-- Banner -->
        <div v-if="authInfo.type == 'company'">
            <h3 class="font-bold text-gr-800 mb-2 mt-4">Image de bannière</h3>
            <n-upload ref="banner" action="/api/company/profile/banner" :custom-request="editCompanyBanner" :multiple="false"
                :show-file-list="false" accept=".jpeg,.png,.jpg">
                <n-button :loading="bannerIsLoading">Sélectionnez une image de bannière</n-button>
            </n-upload>
        </div>
        

        <hr class="my-8">
        <h3 class="font-bold text-gr-800 mb-4">Informations d'authentification</h3>
        <n-form ref="formauthinfo" :model="authInfo" :rules="authInfoRules">
            <n-form-item path="name" label="Nom">
                <n-input v-model:value="authInfo.name" @keydown.enter.prevent />
            </n-form-item>
            <n-form-item path="email" label="Email">
                <n-input v-model:value="authInfo.email" @keydown.enter.prevent />
            </n-form-item>
            <n-button :loading="editAuthIsLoading" @click="editAuthInfo">
                Enregistrer
            </n-button>
        </n-form>

        <hr class="my-8">
        <h3 class="font-bold text-gr-800 mb-4">Mot de passe</h3>
        <n-form ref="formpassword" :model="passwords" :rules="passwordRules">
            <n-form-item path="password" label="Mot de passe">
                <n-input type="password" v-model:value="passwords.password" @keydown.enter.prevent />
            </n-form-item>
            <n-form-item path="password_confirmation" label="Confirmer votre mot de passe">
                <n-input type="password" v-model:value="passwords.password_confirmation" @keydown.enter.prevent />
            </n-form-item>
            <n-button :loading="editPasswordIsLoading" @click="editPassword">
                Enregistrer
            </n-button>
        </n-form>

        <!-- <template #footer>
            <n-button @click="submit" :loading="loading">
                Enregistrer
            </n-button>
        </template> -->
    </n-card>
</template>

<script setup lang="ts">
import { NButton, NUpload, NForm, NFormItem, NInput, NCard } from 'naive-ui'
import type { UploadFileInfo } from 'naive-ui'
import { ref, reactive, onMounted } from 'vue'
import axios from '../../services/axios';
import formvalidator from '../../services/formvalidator'

const picture = ref()
const banner = ref()
const loading = ref(false)
const formRef = ref()
const formauthinfo = ref()
const formpassword = ref()

/**
 * Edit profile picture
 */
const pictureIsLoading = ref(false)
const currentPicture = ref("https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png")
const editProfilePicture = async ({ file }) => {
    pictureIsLoading.value = true
    const formData = new FormData()
    formData.append('picture', file.file as File)
    try {
        await axios.post('/api/profile/picture', formData, {
            headers: {
                'Content-Type': 'multipart/form-data',
            }
        })
        window.location.reload()
    } catch (err) {
        pictureIsLoading.value = false

    }
}

const bannerIsLoading = ref(false)
const editCompanyBanner = async ({ file }) => {
    bannerIsLoading.value = true
    const formData = new FormData()
    formData.append('banner', file.file as File)
    try {
        await axios.post('/api/company/profile/banner', formData, {
            headers: {
                'Content-Type': 'multipart/form-data',
            }
        })
        window.location.reload()
    } catch (err) {
        bannerIsLoading.value = false

    }
}

/**
 * Edit Auth Info
 */
const editAuthIsLoading = ref(false)
const authInfo = reactive({
    name: "",
    email: "",
    type: ""
})
const authInfoRules = {
    name: {
        required: true,
        trigger: ['input', 'blur'],
        validator(rule: any, value: string) {
            if (value.length > 32) {
                return new Error("le nom ne peut pas dépasser 32 caractères")
            } else if (value.length <= 0) {
                return new Error("Le nom est requis")
            }
            return true;
        }
    },
    email: {
        required: true,
        trigger: ['input', 'blur'],
        validator(rule: any, value: string) {
            if (value.length > 32) {
                return new Error("le nom ne peut pas dépasser 32 caractères")
            } else if (value.length <= 0) {
                return new Error("Le nom est requis")
            }
            return true;
        }
    },
}

const editAuthInfo = async (e) => {
    e.preventDefault()
    try {
        editAuthIsLoading.value = true
        await axios.put('api/profile/auth-info', {
            name: authInfo.name,
            email: authInfo.email
        })
        window.location.reload()
    } catch (error) {
        editAuthIsLoading.value = false
    }
}

/**
 * Edit password
 */
const editPasswordIsLoading = ref(false)
const passwords = reactive({
    password: "nice_try",
    password_confirmation: "nice_try"
})
const passwordRules = {}

const editPassword = async (e) => {
    e.preventDefault()
    try {
        editPasswordIsLoading.value = true
        await axios.put('api/profile/password', {
            password: passwords.password,
            password_confirmation: passwords.password_confirmation
        })
        window.location.reload()
    } catch (error) {
        editPasswordIsLoading.value = false
    }
}


onMounted(async () => {
    const req = await axios.get('api/user')
    authInfo.name = req.data.name
    authInfo.email = req.data.email
    authInfo.type = req.data.type
    currentPicture.value = req.data.picture ?? "https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png"
})

// const submit = async () => {
//     try {
//         const ok = await formvalidator(formRef)
//         alert(ok)
//         if (ok) {
//             loading.value = true
//             await axios.post('api/myprofile/user-info', {
//                 name: userInfo.name
//             })
//             window.location.reload()
//         }
//     } catch (e) {
//         loading.value = false
//     }
// }
</script>