<script setup>
import MovieContainer from '@/Components/MovieShowcase/MovieContainer.vue';
import BackdropContainer from '@/Components/MovieShowcase/BackdropContainer.vue';
</script>
<template>
    <!-- Work In Production -->
    <!-- template draft to list all movies based on netflix with infinite scrooling -->
    
    <div v-if="store.search_result.length == null"
        class="flex flex-col text-white text-center h-screen w-full place-content-center">
        <div class="text-6xl place-self-center">
            Seja bem vindo!!
        </div>
        <div class="text-4xl mt-4">
            Que aventura podemos lhe trazer hoje?
        </div>
    </div>
    <BackdropContainer v-else>
        <div
            class="flex flex-row mb-4 h-full w-full overflow-x-scroll snap-x overflow-y-hidden scroll-smooth nowrap pb-5 -mt-10">

            <div v-for="movie in store.search_result" class="snap-center mx-1" style="min-width: 10vw;">
                <MovieContainer :movie="movie" />
            </div>


        </div>
    </BackdropContainer>
</template>