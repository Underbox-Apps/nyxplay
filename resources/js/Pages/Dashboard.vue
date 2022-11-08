<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import MovieShowcase from '@/Components/MovieShowcase.vue';
import { Head } from '@inertiajs/inertia-vue3';
</script>

<template>

    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <MovieShowcase/>
    </AuthenticatedLayout>
</template>
