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
import { NButton, NUpload, NForm, NFormItem, NInput, NCard, NDynamicInput } from 'naive-ui'
import { ref, reactive, onMounted } from 'vue'
import axios from '../../../services/axios';
import formvalidator from '../../../services/formvalidator'


const summary = ref("")
const loading = ref(false)

const currentPicture = ref("https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png")

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

const updateUserInfo = async () => {

}
</script>