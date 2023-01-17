<template>
    <n-card title="Modifier votre niveau d'etude" :bordered="false" size="huge" role="dialog" aria-modal="true">
        <div class="grid grid-cols-2 gap-4">
            <n-form-item label="Type">
                <n-select v-model:value="selected.type" :options="types" @update:value="() => selected.year = ''" />
            </n-form-item>

            <n-form-item label="Année">
                <n-select v-model:value="selected.year" :options="years" />
            </n-form-item>
        </div>
        <n-button :loading="loading" @click="editField">
            Enregistrer
        </n-button>
    </n-card>
</template>

<script setup lang="ts">
import { NButton, NUpload, NForm, NFormItem, NSelect, NCard, useMessage } from 'naive-ui'
import type { UploadFileInfo } from 'naive-ui'
import { ref, reactive, onMounted,computed } from 'vue'
import axios from '../../../services/axios';
import formvalidator from '../../../services/formvalidator'

const fields = [
    {
        name: 'Années Préparatoires',
        childs: ['1ère année', '2ème année'],
    },
    {
        name: 'Génie Electrique',
        childs: ['3ème année', '4ème année', '5ème année']
    },
    {
        name: 'Génie Informatique',
        childs: ['3ème année', '4ème année', '5ème année']
    },
    {
        name: 'Génie Réseaux et Systèmes de Télécommunications', // Réseaux et Systèmes de Télécommunications
        childs: ['3ème année', '4ème année', '5ème année']
    },
    {
        name: 'Génie Industriel',
        childs: ['3ème année', '4ème année', '5ème année']
    },
    {
        name: 'Génie Mécatronique',
        childs: ['3ème année', '4ème année', '5ème année']
    }
]

const loading = ref(false)
const selected = reactive({
    type: "",
    year: ""
})

const message = useMessage()

const types = computed(() => {
    return fields.map((el) => {
        return {
            label: el.name,
            value: el.name
        }
    })
})
const years = computed(() => {
    return (fields.find(el => el.name == selected.type) ?? {childs: ['test']}).childs.map((el) => {
        return {
            label: el,
            value: el,
        }
    } )
})

const editField = async () => {
    loading.value = true
    try {
        await axios.put('/api/student/profile/field', {
            type: selected.type,
            year: selected.year
        })
        window.location.reload()
    } catch (err) {
        loading.value = false
        message.error("Une erreur s'est produite avec votre demande, veuillez vérifier vos entrées et leurs formats")

    }
}
</script>