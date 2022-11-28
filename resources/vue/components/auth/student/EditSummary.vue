<template>
    <n-card title="Modifier votre sommaire" :bordered="false" size="huge" role="dialog" aria-modal="true">

        <n-input
            type="textarea"
            placeholder="sommaire"
            v-model:value="summary"
        />

        <template #footer>
            <n-button @click="submit" :loading="loading">
                Enregistrer
            </n-button>
        </template>
    </n-card>
</template>

<script setup lang="ts">
import { NButton, NInput, NCard } from 'naive-ui'
import { ref, onMounted } from 'vue'
import axios from '../../../services/axios';


const summary = ref("")
const loading = ref(false)

const submit = async () => {
    try {
        loading.value = true
        await axios.put('api/student/profile/summary', {
            summary: summary.value
        })
        window.location.reload()
    } catch (e) {
        loading.value = false
    }
}

onMounted(async () => {
    try {
        const req = await axios.get('api/student/profile/summary')
        summary.value = req.data
    } catch (err) {
        alert(err)
    }
})
</script>