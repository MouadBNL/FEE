<template>
    <h1>Hello world</h1>
    <button @click="inc">{{ counter }}</button>
</template>

<script lang="ts" setup>
import { ref } from 'vue';

const counter = ref(0)

const inc = () => {
    counter.value++
}
</script>