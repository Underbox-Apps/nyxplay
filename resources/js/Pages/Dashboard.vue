<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import MovieShowcase from '@/Components/MovieShowcase/MovieShowcase.vue';
import AdminDashboard from '@/Pages/AdminDashboard.vue';
import { Head } from '@inertiajs/inertia-vue3';
import { computed } from 'vue';
import { usePage } from '@inertiajs/inertia-vue3';

const user = computed(() => usePage().props.value.auth.user);
</script>

<template>

    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <MovieShowcase v-if="user.is_admin == 0" />
        <AdminDashboard v-else />
    </AuthenticatedLayout>
</template>
