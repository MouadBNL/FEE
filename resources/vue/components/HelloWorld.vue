<template>
    <div>
        <span>Counter {{ counter }}</span>
        <button @click="incr" class="px-4 py-2 bg-indigo-700 text-white">Incr</button>
    </div>
</template>

<script setup lang="ts">
import { ref } from 'vue'
const counter = ref(0)

const incr = () => {
    counter.value++
}
</script>