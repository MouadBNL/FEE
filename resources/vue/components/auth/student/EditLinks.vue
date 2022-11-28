<template>
    <n-card title="Modifier vos liens" :bordered="false" size="huge" role="dialog" aria-modal="true">

        <n-dynamic-input v-model:value="links" />

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

const links = ref([])
const loading = ref(false)

const submit = async () => {
    try {
        loading.value = true
        await axios.put('api/student/profile/links', {
            links: links.value
        })
        window.location.reload()
    } catch (e) {
        loading.value = false
    }
}

onMounted(async () => {
    try {
        const req = await axios.get('api/student/profile/links')
        links.value = req.data
    } catch (err) {
        alert(err)
    }
})
</script>