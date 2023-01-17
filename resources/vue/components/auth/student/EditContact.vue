<template>
    <n-card title="Modifier vos informations de contact" :bordered="false" size="huge" role="dialog" aria-modal="true">
        <n-form ref="formcontact" :model="contacts" :rules="contactRules">
            <n-form-item path="phone" label="Numéro de contact">
                <n-input v-model:value="contacts.phone" @keydown.enter.prevent placeholder="0611223355" />
            </n-form-item>
            <n-form-item path="email" label="Email de contact">
                <n-input v-model:value="contacts.email" @keydown.enter.prevent placeholder="email@example.com"/>
            </n-form-item>
            <n-button :loading="loading" @click="editContact">
                Enregistrer
            </n-button>
        </n-form>
    </n-card>
</template>

<script setup lang="ts">
import { NButton, NUpload, NForm, NFormItem, NInput, NCard, useMessage } from 'naive-ui'
import type { UploadFileInfo } from 'naive-ui'
import { ref, reactive, onMounted } from 'vue'
import axios from '../../../services/axios';
import formvalidator from '../../../services/formvalidator'


const formcontact = ref()
const loading = ref(false)
const contacts = reactive({
    phone: "",
    email: ""
})

const message = useMessage()

const editContact = async () => {
    loading.value = true
    try {
        await axios.put('/api/student/profile/contact', {
            phone: contacts.phone,
            email: contacts.email,
        })
        window.location.reload()
    } catch (err) {
        loading.value = false
        message.error("Une erreur s'est produite avec votre demande, veuillez vérifier vos entrées et leurs formats")

    }
}

onMounted(async () => {
    const req = await axios.get('api/student/profile/contact')
    contacts.phone = req.data.phone
    contacts.email = req.data.email
})

const contactRules = {
    phone: {
        required: false,
        trigger: ['input', 'blur'],
        validator(rule: any, value: string) {
            
            return true;
        }
    },
    email: {
        required: false,
        trigger: ['input', 'blur'],
        validator(rule: any, value: string) {
            if (value.length > 32) {
                return new Error("l'email ne peut pas dépasser 32 caractères")
            } else if (value.length <= 0) {
                return new Error("L'email est requis")
            }
            return true;
        }
    },
}
</script>