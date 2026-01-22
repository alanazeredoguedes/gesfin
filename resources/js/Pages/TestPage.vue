<script setup lang="ts">

import {Link} from "@inertiajs/vue3";

const age: number = 32;

const props = defineProps<{
    with?: number
}>()

</script>


<template>
    <h1>Test Page</h1>
    Idade: {{ age}}


    <br><br>


    <Link :href="route('home')" class="text-blue-600 underline">
        Ir para TestPage
    </Link>


    <br><br><br>




</template>


