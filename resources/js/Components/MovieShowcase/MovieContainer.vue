<script setup>
import { store } from '@/Services/store'
import api from '@/Services/api';
import { usePage } from '@inertiajs/inertia-vue3'

const props = defineProps(['movie'])
const ToogleFocus = async () => {
    const response = await api.getTitleDetails(props.movie.id, usePage().props.value.apiKey)
    store.selected_title_detailment = response
}
</script>
<template>
    <div @click="ToogleFocus()"
        class="flex flex-row h-full mx-2 my-2 w-max max-w-full max-h-screen grow place-content-start overflow-y-hidden">
        <div class="flex flex-col h-full min-w-fit">
            <!-- 'https://image.tmdb.org/t/p/original/' + result.poster_path -->
            <img v-if="props.movie.poster_path != null" class="h-full w-full object-scale-down shadow-transparent"
                :src="'https://image.tmdb.org/t/p/original' + props.movie.poster_path">
            <img v-else src="/assets/poster-not-found.jpg" alt="Poster não encontrado">
        </div>
    </div>
</template>