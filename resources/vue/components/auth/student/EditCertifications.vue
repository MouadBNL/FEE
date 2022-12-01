<template>
    <n-card title="Modifier vos certifications" :bordered="false" size="huge" role="dialog" aria-modal="true">

        <n-dynamic-input v-model:value="certifications" :on-create="onCreate" #="{ index, value }" show-sort-button>
            <div class="w-full">

                <n-form-item label="Titre">
                    <n-input type="text" v-model:value="certifications[index].title" placeholder="Titre" />
                </n-form-item>

                <n-form-item label="École">
                    <n-input type="text" v-model:value="certifications[index].school" placeholder="École" />
                </n-form-item>

                <n-form-item label="Date de réception">
                    <n-input type="text" v-model:value="certifications[index].reception" placeholder="date de debut" />
                </n-form-item>

            </div>

        </n-dynamic-input>

        <template #footer>
            <n-button @click="submit" :loading="loading">
                Enregistrer
            </n-button>
        </template>
    </n-card>
</template>

<script setup lang="ts">
import { NButton, NCard, NDynamicInput, NFormItem, NInput } from 'naive-ui'
import { ref, onMounted } from 'vue'
import axios from '../../../services/axios';


const certifications = ref([])
const loading = ref(false)

const submit = async () => {
    try {
        loading.value = true
        await axios.put('api/student/profile/certifications', {
            certifications: certifications.value
        })
        window.location.reload()
    } catch (e) {
        loading.value = false
    }
}

onMounted(async () => {
    try {
        const req = await axios.get('api/student/profile/certifications')
        certifications.value = req.data
    } catch (err) {
        alert(err)
    }
})

const onCreate = () => { return { title: '', school: '', reception: '' } }
</script>