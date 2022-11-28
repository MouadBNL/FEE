<template>
    <n-card title="Modifier vos langues" :bordered="false" size="huge" role="dialog" aria-modal="true">

        <n-dynamic-input 
            v-model:value="languages"
            preset="pair"
            key-placeholder="Langue"
            value-placeholder="Niveau"
     />

        <template #footer>
            <n-button @click="submit" :loading="loading">
                Enregistrer
            </n-button>
        </template>
    </n-card>
</template>

<script setup lang="ts">
import { NButton, NCard, NDynamicInput } from 'naive-ui'
import { ref, onMounted } from 'vue'
import axios from '../../../services/axios';


const languages = ref([])
const loading = ref(false)


const submit = async () => {
    try {
        loading.value = true
        await axios.put('api/student/profile/languages', {
            languages: languages.value
        })
        window.location.reload()
    } catch (e) {
        loading.value = false
    }
}

onMounted(async () => {
    try {
        const req = await axios.get('api/student/profile/languages')
        languages.value = req.data
    } catch (err) {
        alert(err)
    }
})
</script>