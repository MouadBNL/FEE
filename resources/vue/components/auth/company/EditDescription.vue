<template>
    <n-card title="Modifier votre description" :bordered="false" size="huge" role="dialog" aria-modal="true">

        <!-- <n-input
            type="textarea"
            placeholder="description"
            v-model:value="description"
        /> -->
        <div class="enable-list">
            <editor :editor="ClassicEditor" v-model="description" :config="editorConfig"></editor>
        </div>

        <template #footer>
            <n-button @click="submit" :loading="loading">
                Enregistrer
            </n-button>
        </template>
    </n-card>
</template>

<script setup lang="ts">
import { NButton, NInput, NCard, useMessage } from 'naive-ui'
import { ref, onMounted } from 'vue'
import axios from '../../../services/axios';
import ClassicEditor from '@ckeditor/ckeditor5-build-classic'
import CKEditor from '@ckeditor/ckeditor5-vue'

const Editor = CKEditor.component

const editorConfig = {
    removePlugins: [ 'Heading', 'Link', 'CKFinder', 'blockQuote', 'menubutton' ],
    toolbar: [ 'bold', 'italic', 'numberedList', 'bulletedList' ],
}

const description = ref("")
const loading = ref(false)
const message = useMessage()

const submit = async () => {
    try {
        loading.value = true
        await axios.put('api/company/profile/description', {
            description: description.value
        })
        window.location.reload()
    } catch (e) {
        loading.value = false
        message.error("Une erreur s'est produite avec votre demande, veuillez vérifier vos entrées et leurs formats")
    }
}

onMounted(async () => {
    try {
        const req = await axios.get('api/company/profile/description')
        description.value = req.data
    } catch (err) {
        alert(err)
    }
})
</script>