<template>
    <n-card title="Modifier vos experiences" :bordered="false" size="huge" role="dialog" aria-modal="true">

        <n-dynamic-input v-model:value="experiences" :on-create="onCreate" #="{ index, value }" show-sort-button>
            <div class="w-full">

                <n-form-item label="Titre">
                    <n-input type="text" v-model:value="experiences[index].title" placeholder="Titre" />
                </n-form-item>
    
                <n-form-item label="Entreprise">
                    <n-input type="text" v-model:value="experiences[index].company" placeholder="Entreprise" />
                </n-form-item>

                <small class="block text-red-500">Format YYYY-MM-DD</small>
                <div class="grid grid-cols-2 gap-4">
    
                    <div>
                        <n-form-item label="Debut (YYYY-MM-DD)">
                            <n-input type="text" v-model:value="experiences[index].start" placeholder="YYYY-MM-DD" />
                        </n-form-item>
                    </div>

                    <div>
                        <n-form-item label="Fin (YYYY-MM-DD)">
                            <n-input type="text" v-model:value="experiences[index].end" placeholder="Date de fin" />
                        </n-form-item>
                    </div>
                </div>
    
                <n-form-item label="Description">
                    <n-input type="textarea" v-model:value="experiences[index].description" placeholder="Description" />
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
import { NButton, NCard, NDynamicInput, NFormItem, NInput, useMessage } from 'naive-ui'
import { ref, onMounted } from 'vue'
import axios from '../../../services/axios';


const experiences = ref([])
const loading = ref(false)
const message = useMessage()

const submit = async () => {
    try {
        loading.value = true
        await axios.put('api/student/profile/experiences', {
            experiences: experiences.value
        })
        window.location.reload()
    } catch (e) {
        loading.value = false
        message.error("Une erreur s'est produite avec votre demande, veuillez vérifier vos entrées et leurs formats")
    }
}

onMounted(async () => {
    try {
        const req = await axios.get('api/student/profile/experiences')
        experiences.value = req.data
    } catch (err) {
        alert(err)
    }
})

const onCreate = () => { return { title: '', company: '', start: '', end: '', description: '' } }
</script>