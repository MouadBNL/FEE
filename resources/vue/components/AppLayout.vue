<template>
    <component :is="currentLayout">
        <slot />
    </component>
</template>

<script lang="ts" setup>
import { watch, shallowRef } from 'vue'
import { useRoute } from 'vue-router'
import { getLayout } from '@/layouts'

const route = useRoute()
const currentLayout = shallowRef(null)

watch(
    () => route.meta,
    async meta => {
        currentLayout.value = getLayout(meta.layout as string)
    }
)
</script>