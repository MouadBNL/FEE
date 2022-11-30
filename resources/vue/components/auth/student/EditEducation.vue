<template>
    <n-card title="Modifier votre parcours d'éducation" :bordered="false" size="huge" role="dialog" aria-modal="true">

        <n-dynamic-input v-model:value="education" :on-create="onCreate" #="{ index, value }" show-sort-button>
            <div class="w-full">

                <n-form-item label="Titre">
                    <n-input type="text" v-model:value="education[index].title" placeholder="Titre" />
                </n-form-item>
    
                <n-form-item label="École">
                    <n-input type="text" v-model:value="education[index].school" placeholder="École" />
                </n-form-item>
    
                <div class="grid grid-cols-2 gap-4">
    
                    <n-form-item label="Debut">
                        <n-input type="text" v-model:value="education[index].start" placeholder="date de debut" />
                    </n-form-item>
    
                    <n-form-item label="Fin">
                        <n-input type="text" v-model:value="education[index].end" placeholder="Date de fin" />
                    </n-form-item>
                </div>
    
                <n-form-item label="Description">
                    <n-input type="textarea" v-model:value="education[index].description" placeholder="Description" />
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


const education = ref([])
const loading = ref(false)

const submit = async () => {
    try {
        loading.value = true
        await axios.put('api/student/profile/education', {
            education: education.value
        })
        window.location.reload()
    } catch (e) {
        loading.value = false
    }
}

onMounted(async () => {
    try {
        const req = await axios.get('api/student/profile/education')
        education.value = req.data
    } catch (err) {
        alert(err)
    }
})

const onCreate = () => { return { title: '', company: '', start: '', end: '', description: '' } }
</script>