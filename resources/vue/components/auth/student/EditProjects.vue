<template>
    <n-card title="Modifier vos projets" :bordered="false" size="huge" role="dialog" aria-modal="true">

        <n-dynamic-input v-model:value="projects" :on-create="onCreate" #="{ index, value }" show-sort-button>
            <div class="w-full">

                <n-form-item label="Titre">
                    <n-input type="text" v-model:value="projects[index].title" placeholder="Titre" />
                </n-form-item>

                <n-form-item label="Description">
                    <n-input type="textarea" v-model:value="projects[index].description" placeholder="Description" />
                </n-form-item>
                
                <n-form-item label="Compétences">
                    <n-dynamic-tags v-model:value="projects[index].skills" />
                </n-form-item>

                <div class="grid grid-cols-2 gap-4">

                    <n-form-item label="Lien">
                        <n-input type="text" v-model:value="projects[index].link"
                            placeholder="lien vers votre projet" />
                    </n-form-item>

                    <n-form-item label="Git">
                        <n-input type="text" v-model:value="projects[index].git" placeholder="lien vers le repo git" />
                    </n-form-item>
                </div>
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
import { NButton, NCard, NDynamicInput, NFormItem, NInput, NDynamicTags, useMessage } from 'naive-ui'
import { ref, onMounted } from 'vue'
import axios from '../../../services/axios';

const message = useMessage()
const projects = ref([])
const loading = ref(false)

const submit = async () => {
    try {
        loading.value = true
        await axios.put('api/student/profile/projects', {
            projects: projects.value
        })
        window.location.reload()
    } catch (e) {
        loading.value = false
        message.error("Une erreur s'est produite avec votre demande, veuillez vérifier vos entrées et leurs formats")
    }
}

onMounted(async () => {
    try {
        const req = await axios.get('api/student/profile/projects')
        projects.value = req.data
    } catch (err) {
        message.error("Une erreur s'est produite avec votre demande.")
    }
})

const onCreate = () => { return { title: '', description: '', skills: [], link: '', git: '' } }
</script>