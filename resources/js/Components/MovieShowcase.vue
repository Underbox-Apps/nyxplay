<script setup>
import MovieShowcaseRow from '@/Components/MovieShowcaseRow.vue';
</script>
<template>
    <div class="relative flex flex-col items-start min-h-screen min-w-screen bg-scroll sm:pt-0"
        style="background-image: url('/assets/cinesala.webp'); background-size: cover; background-repeat: no-repeat; background-position: center;">
        <div
            class="relative flex flex-col items-start h-screen w-full bg-scroll sm:pt-0 bg-gray-500 bg-opacity-30 ">
            <div class="my-4 w-full">
                <MovieShowcaseRow :title="'Mais Assistidos'" />
            </div>
        </div>
    </div>
</template>