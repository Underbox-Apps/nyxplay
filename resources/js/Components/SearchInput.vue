<script setup>
import { ref, watch } from 'vue'
import { MagnifyingGlassIcon } from '@heroicons/vue/24/outline'
import api from '@/Services/api';
import { store } from '@/Services/store'
import { usePage } from '@inertiajs/inertia-vue3'

const search = ref(null)
const busy = ref(false)

const searchMovie = async () => {
    busy.value = true
    setTimeout(async () => {
        const response = await api.searchTitle(search.value, usePage().props.value.apiKey)
        store.search_result = response.results
        busy.value = false
    }, '3000')
}

watch(search, (newSearch) => {
    if (busy.value == false) {
        try {
            searchMovie()
        } catch (error) {
            // aqui deverá ser inserido um Sweetalert de erro
            console.log('error')
        }
    }
})
</script>

<template>
    <label class="relative text-gray-400 focus-within:text-gray-600 block w-full">
        <MagnifyingGlassIcon class="pointer-events-none w-8 h-8 absolute top-1/2 transform -translate-y-1/2 left-3" />
        <input type="email" name="email" id="email" placeholder="Buscar Titulo" v-model="search"
            class="form-input border border-gray-900 px-4 bg-white placeholder-gray-400 text-gray-500 appearance-none w-full block pl-14 focus:outline-none focus:py-4 rounded-full">
    </label>
</template>