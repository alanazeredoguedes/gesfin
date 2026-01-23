<script setup lang="ts">
import { Link } from '@inertiajs/vue3'

import ClientLayout from '@/Pages/Client/ClientLayout.vue'
defineOptions({ layout: ClientLayout })

const props = defineProps<{
    pageName?: string
}>()

</script>
<template>

    <h1> Client - {{ pageName }}</h1>

    <Link :href="route('admin.home')" class="text-blue-600 underline">
        Ir para Admin
    </Link>

    <br><br>

    <Link :href="route('client.home')" class="text-blue-600 underline">
        Ir para Client
    </Link>

    <br><br>

    <Link :href="route('public.home')" class="text-blue-600 underline">
        Ir para Public
    </Link>


    <br> <br>


    <a class="text-blue-600 underline" :href="route('admin.home')">Go Admin</a>


    <br>

</template>
