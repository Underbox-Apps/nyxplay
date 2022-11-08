<script setup>
import { ref } from 'vue';
import MovieDetailment from '@/Components/MovieDetailment.vue';

const backdrop_path = ref('url(https://image.tmdb.org/t/p/original/vViRXFnSyGJ2fzMbcc5sqTKswcd.jpg)')
</script>

<template>
    <div class="flex flex-col h-full w-full bg-fixed backdrop-container place-content-end">
        <div class="flex flex-col w-full h-screen justify-center md:justify-between">
            <div class="place-content-start">
                <MovieDetailment class="hidden md:flex" />
            </div>
            <slot />
        </div>
    </div>
</template>

<style>
.backdrop-container {
    position: relative;
    z-index: 1;
}

.backdrop-container::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: .7;
    z-index: -1;
    background-image: v-bind(backdrop_path);
    background-repeat: no-repeat;
    background-size: cover;
}
</style>