<script setup>
import { Link } from '@inertiajs/inertia-vue3';
</script>

<template>
    <div class="flex flex-row justify-between">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard
        </h2>
        <Link :href="route('logout')" method="post" as="button">
            Logout
        </Link>
    </div>

    <div class="py-12 h-screen" style="background-color: rgb(26,47,48, 0.8);">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <main>
                    <slot />
                </main>
            </div>
        </div>
    </div>
</template>
