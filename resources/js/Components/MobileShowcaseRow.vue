<script setup>
import MovieContainer from '@/Components/MovieContainer.vue';
import { ref } from 'vue';

const search_result = ref(null)
const OpenDetail = (id) => {
    console.log("Movie: " + id)
}
</script>
<template>
    <div v-if="search_result == null" class="flex flex-col text-white text-center h-full place-content-center mx-2">
        <div class="text-6xl place-self-center">
            Seja bem vindo!!
        </div>
        <div class="text-4xl mt-4">
            Que aventura podemos lhe trazer hoje?
        </div>
    </div>
    <div v-else class="overflow-y-auto scroll-smooth h-full pt-14">
        <div class="text-lg text-white font-bold mt-3 ml-5 overflow-y-hidden">Resultado da busca:</div>
        <div class="flex flex-row flex-wrap w-full my-1 overflow-x-hidden overflow-y-hidden justify-left px-10">
            <div v-for="i in 10" class="mr-2 w-5/12 md:w-3/12">
                <MovieContainer @selected-movie="(id) => OpenDetail(id)" />
            </div>
        </div>
    </div>
</template>