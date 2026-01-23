<script setup lang="ts">
import { Link } from '@inertiajs/vue3'
import AdminLayout from '@admin/Pages/AdminLayout.vue'
import { route } from 'ziggy-js'

defineOptions({ layout: AdminLayout })

const props = defineProps<{
    pageName?: string
}>()

const routes = route().routes


</script>
<template>

    <h1> Admin - {{ pageName }}</h1>

    <br>

    <a href="/" class="text-blue-600 underline ml-4"> Public </a>
    <a href="/client" class="text-blue-600 underline ml-4"> Client </a>
    <a href="/admin" class="text-blue-600 underline ml-4"> Admin </a>

    <br><br>


    <Link :href="route('admin.home')" class="text-blue-600 underline">
        Ir para Admin
    </Link>

    <br><br>

    <Link :href="route('admin.test')" class="text-blue-600 underline">
        Ir para Admin Test
    </Link>


    <br><br>




    <br> <br> <br>


</template>
