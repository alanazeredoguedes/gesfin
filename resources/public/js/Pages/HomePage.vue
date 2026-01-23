<script setup lang="ts">
import { Link } from '@inertiajs/vue3';

const props = defineProps<{
    pageName?: string;
}>();
</script>
<template>
    <h1>Public - {{ pageName }}</h1>

    <br />

    <a href="/" class="ml-4 text-blue-600 underline"> Public </a>
    <a href="/client" class="ml-4 text-blue-600 underline"> Client </a>
    <a href="/admin" class="ml-4 text-blue-600 underline"> Admin </a>

    <br /><br />

    <Link :href="route('public.home')" class="text-blue-600 underline"> Ir para Public </Link>

    <br />
</template>
