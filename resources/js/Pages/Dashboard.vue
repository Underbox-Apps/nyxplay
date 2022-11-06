<script setup>
import { onMounted } from 'vue'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import api from '@/Services/api'
import { Head, usePage } from '@inertiajs/inertia-vue3'

onMounted(async () => {
    const response = await api.searchTitle("Jack Reacher", usePage().props.value.apiKey)
    console.log(response.results)
})
</script>

<template>

    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <div class="py-12" style="background-color: rgb(26,47,48, 0.6);">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        You're logged in!
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
