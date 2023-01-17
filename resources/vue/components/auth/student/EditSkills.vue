<template>
    <n-card title="Modifier vos compétences" :bordered="false" size="huge" role="dialog" aria-modal="true">

        <n-dynamic-input v-model:value="skills" />

        <template #footer>
            <n-button @click="submit" :loading="loading">
                Enregistrer
            </n-button>
        </template>
    </n-card>
</template>

<script setup lang="ts">
import { NButton, NCard, NDynamicInput, useMessage } from 'naive-ui'
import { ref, onMounted } from 'vue'
import axios from '../../../services/axios';

const message = useMessage()
const skills = ref([])
const loading = ref(false)

const submit = async () => {
    try {
        loading.value = true
        await axios.put('api/student/profile/skills', {
            skills: skills.value
        })
        window.location.reload()
    } catch (e) {
        loading.value = false
        message.error("Une erreur s'est produite avec votre demande, veuillez vérifier vos entrées et leurs formats")
    }
}

onMounted(async () => {
    try {
        const req = await axios.get('api/student/profile/skills')
        skills.value = req.data
    } catch (err) {
        message.error("Une erreur s'est produite avec votre demande.")
    }
})
</script>