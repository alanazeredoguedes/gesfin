<script setup lang="ts">
import { Link } from '@inertiajs/vue3'

const props = defineProps<{
    pageName?: string
}>()

</script>
<template>

    <h1> Public - {{ pageName }}</h1>


    <br>

    <a href="/" class="text-blue-600 underline ml-4"> Public </a>
    <a href="/client" class="text-blue-600 underline ml-4"> Client </a>
    <a href="/admin" class="text-blue-600 underline ml-4"> Admin </a>


    <br><br>

    <Link :href="route('public.home')" class="text-blue-600 underline">
        Ir para Public
    </Link>

    <br>

</template>
