<template>
    <h1>Hello world</h1>
    <button @click="inc" class="px-8 py-2 bg-primary-light-1 text-white">{{ counter }}</button>
</template>

<script lang="ts" setup>
import { ref } from 'vue';

const counter = ref(0)

const inc = () => {
    counter.value++
}
</script>