<script setup>
import MovieContainer from '@/Components/MovieContainer.vue';
import BackdropContainer from './BackdropContainer.vue';

const OpenDetail = (id) => {
    console.log("Movie: " + id)
}
</script>
<template>
    <BackdropContainer>
        <div class="flex flex-row my-4 overflow-x-auto overflow-y-hidden nowrap">

            <div class="mx-2 w-2/6 md:w-3/12 lg:w-2/12">
                <MovieContainer @selected-movie="(id) => OpenDetail(id)" />
            </div>
            <div class="mx-2 w-2/6 md:w-3/12 lg:w-2/12">
                <MovieContainer @selected-movie="(id) => OpenDetail(id)" />
            </div>
            <div class="mx-2 w-2/6 md:w-3/12 lg:w-2/12">
                <MovieContainer @selected-movie="(id) => OpenDetail(id)" />
            </div>
            <div class="mx-2 w-2/6 md:w-3/12 lg:w-2/12">
                <MovieContainer @selected-movie="(id) => OpenDetail(id)" />
            </div>
            <div class="mx-2 w-2/6 md:w-3/12 lg:w-2/12">
                <MovieContainer @selected-movie="(id) => OpenDetail(id)" />
            </div>
            <div class="mx-2 w-2/6 md:w-3/12 lg:w-2/12">
                <MovieContainer @selected-movie="(id) => OpenDetail(id)" />
            </div>
            <div class="mx-2 w-2/6 md:w-3/12 lg:w-2/12">
                <MovieContainer @selected-movie="(id) => OpenDetail(id)" />
            </div>
            <div class="mx-2 w-2/6 md:w-3/12 lg:w-2/12">
                <MovieContainer @selected-movie="(id) => OpenDetail(id)" />
            </div>
            <div class="mx-2 w-2/6 md:w-3/12 lg:w-2/12">
                <MovieContainer @selected-movie="(id) => OpenDetail(id)" />
            </div>
            <div class="mx-2 w-2/6 md:w-3/12 lg:w-2/12">
                <MovieContainer @selected-movie="(id) => OpenDetail(id)" />
            </div>
            <div class="mx-2 w-2/6 md:w-3/12 lg:w-2/12">
                <MovieContainer @selected-movie="(id) => OpenDetail(id)" />
            </div>
        </div>
    </BackdropContainer>
</template>