<script setup>
import MovieShowcaseRow from '@/Components/MovieShowcaseRow.vue';
</script>
<template>
    <div class="relative flex flex-col items-start min-h-screen min-w-screen bg-scroll sm:pt-0"
        style="background-image: url('/assets/cinesala.webp'); background-size: cover; background-repeat: no-repeat; background-position: center;">
        <div class="relative flex flex-col place-content-end items-start h-screen w-full bg-scroll sm:pt-0 bg-black bg-opacity-80">
            <MovieShowcaseRow/>
        </div>
    </div>
</template>