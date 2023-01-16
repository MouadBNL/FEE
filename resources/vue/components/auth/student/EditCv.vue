<template>
    <n-card title="Modifier votre CV" :bordered="false" size="huge" role="dialog" aria-modal="true">
        <h3 class="font-bold text-gr-800 mb-4">Choisir un fichier PDF, avec un maximum de 8Mo</h3>
        <div class="flex gap-8 items-center">
            <n-upload ref="cv" action="/api/student/profile/cv" :custom-request="editProfileCV" :multiple="false"
                :show-file-list="false" accept=".pdf">
                <n-button :loading="cvIsLoading">Sélectionnez un fichier</n-button>
            </n-upload>
            <n-button type="error" :loading="cvDeleting" @click="deleteStudentCV">
                Supprimer
            </n-button>
        </div>
    </n-card>
</template>

<script setup lang="ts">
import { NButton, NUpload, NForm, NFormItem, NInput, NCard } from 'naive-ui'
import type { UploadFileInfo } from 'naive-ui'
import { ref, reactive, onMounted } from 'vue'
import axios from '../../../services/axios';

const cv = ref()
const cvIsLoading = ref(false)
const cvDeleting = ref(false)
const editProfileCV = async ({ file }) => {
    cvIsLoading.value = true
    const formData = new FormData()
    formData.append('cv', file.file as File)
    try {
        await axios.post('/api/student/profile/cv', formData, {
            headers: {
                'Content-Type': 'multipart/form-data',
            }
        })
        window.location.reload()
    } catch (err) {
        cvIsLoading.value = false

    }
}

const deleteStudentCV = async () => {
    cvDeleting.value = true
    try {
        await axios.delete('/api/student/profile/cv')
        window.location.reload()
    } catch (err) {
        cvDeleting.value = false

    }
}


</script>