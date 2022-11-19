<template>
    <n-card class="w-full md:2/3 lg:w-1/3" title="Modifier vos informations utilisateur" :bordered="false" size="huge"
        role="dialog" aria-modal="true">

        <div class="flex gap-8 items-center mb-8">
            <div>
                <img class="blok h-24 w-24 rounded-full" :src="currentPicture" alt="profile-picture">
            </div>
            <n-form-item label="Photo de profil">
                <n-upload ref="picture" :default-upload="false"
                    action="https://www.mocky.io/v2/5e4bafc63100007100d8b70f">
                    <n-button>Sélectionnez une image</n-button>
                </n-upload>
            </n-form-item>
        </div>
        <n-form ref="formRef" :model="userInfo" :rules="rules">

            <n-form-item path="name" label="Nom et Prenom">
                <n-input v-model:value="userInfo.name" @keydown.enter.prevent />
            </n-form-item>
        </n-form>

        <template #footer>
            <n-button @click="submit" :loading="loading">
                Enregistrer
            </n-button>
        </template>
    </n-card>
</template>

<script setup lang="ts">
import { NButton, NUpload, NForm, NFormItem, NInput, NCard } from 'naive-ui'
import type { UploadFileInfo } from 'naive-ui'
import { ref, reactive, onMounted } from 'vue'
import axios from '../../services/axios';
import formvalidator from '../../services/formvalidator'

const picture = ref()
const loading = ref(false)
const formRef = ref()

const rules = {
    name: {
        required: true,
        trigger: ['input', 'blur'],
        validator(rule: any, value: string) {
            if (value.length > 32) {
                return new Error("le nom ne peut pas dépasser 32 caractères")
            } else if (value.length <= 0) {
                return new Error("Le nom est requis")
            }
            return true;
        }
    }
}
const userInfo = reactive({
    name: "",
    email: ""
})

const currentPicture = ref("https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png")

const submit = async () => {
    try {
        const ok = await formvalidator(formRef)
        alert(ok)
        if(ok) {
            loading.value = true
            await axios.post('api/myprofile/user-info', {
                name: userInfo.name
            })
            window.location.reload()
        }
    } catch (e) {
        loading.value = false
    }
}

onMounted(async () => {
    const req = await axios.get('api/user')
    userInfo.name = req.data.name
    userInfo.email = req.data.email
    currentPicture.value = req.data.picture ?? "https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png"
})

const updateUserInfo = async () => {

}
</script>