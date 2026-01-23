<script setup lang="ts">
import { Link } from '@inertiajs/vue3'

import ClientLayout from '@client/Pages/ClientLayout.vue'
defineOptions({ layout: ClientLayout })

const props = defineProps<{
    pageName?: string
}>()

</script>
<template>

    <h1> Client - {{ pageName }}</h1>


    <br>

    <a href="/" class="text-blue-600 underline ml-4"> Public </a>
    <a href="/client" class="text-blue-600 underline ml-4"> Client </a>
    <a href="/admin" class="text-blue-600 underline ml-4"> Admin </a>


    <br> <br>

    <Link :href="route('client.home')" class="text-blue-600 underline">
        Ir para Client
    </Link>

    <br> <br>


    <br>

    <pre>{{ $page.props.ziggy }}</pre>


</template>
