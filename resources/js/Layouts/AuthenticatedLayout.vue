<script setup>
import { Link } from '@inertiajs/inertia-vue3';
import SearchInput from '@/Components/SearchInput.vue';
import { usePage } from '@inertiajs/inertia-vue3';
import { computed } from 'vue';

const user = computed(() => usePage().props.value.auth.user);
</script>

<template>
    <div class="flex flex-row justify-between px-5 py-2 w-full bg-teal-700" style="min-height: 10vh;">
        <div class="flex flex-row w-4/5">
            <div class="hidden lg:flex flex-col place-content-center">
                <div class="flex h-3/5 w-auto">
                    <!-- logo -->
                    <img class="flex object-cover w-auto h-full shadow rounded-full" src="/assets/nyx-logo.jpg"
                        alt="Nyx Tecnology">
                </div>
            </div>

            <!-- Busca -->
            <div class="flex flex-col place-content-center lg:mx-5 w-full">
                <div class="flex flex-row justify-between">
                    <SearchInput v-if="user.is_admin == 0"/>
                </div>
            </div>
        </div>

        <!-- Logout Button -->
        <div class="flex flex-col place-content-center">
            <Link :href="route('logout')" method="post" as="button" class="inline-flex items-center text-white text-sm">
            Logout
            </Link>
        </div>

    </div>
    <slot class="pt-10"  style="min-height: 90vh;"/>
     
</template>
