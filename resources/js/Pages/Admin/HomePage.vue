<script setup lang="ts">
import { Link } from '@inertiajs/vue3'
import AdminLayout from '@/Pages/Admin/AdminLayout.vue'

defineOptions({ layout: AdminLayout })

const props = defineProps<{
    pageName?: string
}>()

</script>
<template>

    <h1> Admin - {{ pageName }}</h1>

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

    <br><br>

    <a class="text-blue-600 underline" :href="route('client.home')">Go Client</a>



    <br>

</template>
