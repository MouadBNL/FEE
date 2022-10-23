<template>
    <h1>Hello world</h1>

    <NSpace>

        <button class="px-8 py-2 bg-primary-light-1 text-white">{{ counter }}</button>
    
        <NButton @click="inc" type="primary">
            {{ counter }}
        </NButton>
    </NSpace>
</template>

<script lang="ts" setup>
import { ref } from 'vue'
import { NButton, NSpace } from 'naive-ui'
import { http } from '@/services'

const counter = ref(0)

const inc = () => {
    counter.value++
}

http.get('/test')
.then(res => {
    console.log(res.data)
})
</script>