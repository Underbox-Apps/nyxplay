<script setup>
import ShowcaseRow from '@/Components/ShowcaseRow.vue';
import MobileShowcaseRow from '@/Components/MobileShowcaseRow.vue';
</script>
<template>
    <div class="flex flex-col items-start min-h-screen min-w-full bg-scroll"
        style="background-image: url('/assets/cinesala.webp'); background-size: cover; background-repeat: no-repeat; background-position: center;">
        <!-- <div
            class="hidden lg:flex flex-col place-content-end items-start w-full bg-scroll sm:pt-0 bg-black bg-opacity-80">
            <ShowcaseRow />
        </div> -->

        <div class="bg-black min-h-screen w-full bg-opacity-80">
            <div class="flex flex-col place-content-start h-full w-full ">
                <MobileShowcaseRow />
            </div>
        </div>
    </div>
</template>