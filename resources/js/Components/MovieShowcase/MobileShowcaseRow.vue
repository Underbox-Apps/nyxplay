<script setup>
import MovieContainer from '@/Components/MovieShowcase/MovieContainer.vue';
import MovieDetailmentModal from '@/Components/MovieShowcase/MovieDetailmentModal.vue';
import LargeModal from '@/Components/LargeModal.vue';
import { store } from '@/Services/store'

</script>
<template>
    <div v-if="store.search_result.length == null"
        class="flex flex-col text-white text-center h-full place-content-center mx-2" style="min-height: 90vh;">
        <div class="text-6xl place-self-center">
            Seja bem vindo!!
        </div>
        <div class="text-4xl mt-4">
            Que aventura podemos lhe trazer hoje?
        </div>
    </div>
    <div v-else class="overflow-y-auto scroll-smooth h-full pt-14">
        <div class="text-lg text-white font-bold mt-3 ml-5 overflow-y-hidden lg:text-2xl">Resultado da busca:</div>
        <div class="flex flex-row flex-wrap w-full my-1 overflow-x-hidden overflow-y-hidden justify-left px-10">
            <div v-for="movie in store.search_result" class="ml-5 w-5/12 md:w-3/12 lg:w-2/12">
                <LargeModal>
                    <template v-slot:button>
                        <MovieContainer :movie="movie" />
                    </template>
                    <template v-slot:body>
                        <MovieDetailmentModal />
                    </template>
                </LargeModal>
            </div>
        </div>
    </div>
</template>