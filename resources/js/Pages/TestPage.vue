<template>
    <h1>Test Page</h1>
    Idade: {{ age}}

</template>


<script setup lang="ts">

const age: number = 32;

const props = defineProps<{
    with?: number
}>()

</script>
