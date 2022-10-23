<template>
    <div>
        <RouterLink :to="{name: 'home'}">Home</RouterLink>
        <RouterLink :to="{name: 'about'}">About</RouterLink>
        <RouterView/>
    </div>
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