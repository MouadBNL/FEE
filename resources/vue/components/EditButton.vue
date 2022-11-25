<template>
    <NButton type="primary" @click="show= true">Edit</NButton>
    <NModal v-model:show="show">
        <slot />
    </NModal>
</template>

<script setup lang="ts">
import { NButton, NModal, NCard } from 'naive-ui'
import { ref } from 'vue'

const show = ref(false)
</script>