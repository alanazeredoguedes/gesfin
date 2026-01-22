<script setup lang="ts">
import { Link } from '@inertiajs/vue3'

</script>
<template>
    <h1>Home Page</h1>

    <Link :href="route('test')" class="text-blue-600 underline">
        Ir para TestPage
    </Link>


</template>
