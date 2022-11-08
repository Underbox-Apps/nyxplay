<script setup>
import MovieContainer from '@/Components/MovieContainer.vue';

const OpenDetail = (id) => {
    console.log("Movie: " + id)
}
</script>
<template>
    <div class="overflow-y-auto">
        <div class="text-lg text-white font-bold mt-3 ml-5 overflow-y-hidden">Resultado da busca:</div>
        <div class="flex flex-row flex-wrap w-full my-1 overflow-x-hidden overflow-y-hidden justify-left px-10">
            <div class="mr-2 w-5/12 md:w-3/12">
                <MovieContainer @selected-movie="(id) => OpenDetail(id)" />
            </div>
            <div class="mr-2 w-5/12 md:w-3/12">
                <MovieContainer @selected-movie="(id) => OpenDetail(id)" />
            </div>
            <div class="mr-2 w-5/12 md:w-3/12">
                <MovieContainer @selected-movie="(id) => OpenDetail(id)" />
            </div>
            <div class="mr-2 w-5/12 md:w-3/12">
                <MovieContainer @selected-movie="(id) => OpenDetail(id)" />
            </div>
            <div class="mr-2 w-5/12 md:w-3/12">
                <MovieContainer @selected-movie="(id) => OpenDetail(id)" />
            </div>
            <div class="mr-2 w-5/12 md:w-3/12">
                <MovieContainer @selected-movie="(id) => OpenDetail(id)" />
            </div>
   
        </div>
    </div>
</template>