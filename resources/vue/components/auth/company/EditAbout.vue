<template>
    <n-card title="Modifier vos information" :bordered="false" size="huge" role="dialog" aria-modal="true">

        <n-form ref="formRef" inline :label-width="80" :model="aboutInfo">
            <n-form-item label="Site web" path="website">
                <n-input v-model:value="aboutInfo.website" placeholder="https://www.example.com"/>
            </n-form-item>
            <n-form-item label="Linkedin" path="linkedin">
                <n-input v-model:value="aboutInfo.linkedin" placeholder="https://www.linkedin.com/company/name"/>
            </n-form-item>
            <n-form-item label="Industrie" path="industry">
                <n-input v-model:value="aboutInfo.industry" placeholder="IT"/>
            </n-form-item>
            <n-form-item label="Taille de l'entreprise" path="company_size">
                <n-input v-model:value="aboutInfo.company_size" placeholder="501-1,000" />
            </n-form-item>
            <n-form-item label="Fondée" path="founding_year">
                <n-input v-model:value="aboutInfo.founding_year" placeholder="2020" />
            </n-form-item>
            <n-form-item label="Adresse" path="address">
                <n-input v-model:value="aboutInfo.address" />
            </n-form-item>
            <n-form-item label="Spécialitées" path="specialties">
                <n-dynamic-tags v-model:value="aboutInfo.specialties" />
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
import { NButton, NInput, NCard, NDynamicTags, NFormItem } from 'naive-ui'
import { ref, reactive, onMounted } from 'vue'
import axios from '../../../services/axios';

const formRef = ref()
const loading = ref(false)
const aboutInfo = ref({
    website: '',
    linkedin: '',
    industry: '',
    company_size: '',
    founding_year: '',
    address: '',
    specialties: []
})

const submit = async (e) => {
    e.preventDefault()
    try {
        loading.value = true
        await axios.put('api/company/profile/about', aboutInfo.value)
        window.location.reload()
    } catch (e) {
        loading.value = false
    }
}

onMounted(async () => {
    try {
        const req = await axios.get('api/company/profile/about')
        aboutInfo.value = req.data
    } catch (err) {
        alert(err)
    }
})
</script>