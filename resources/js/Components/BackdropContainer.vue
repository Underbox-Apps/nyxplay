<script setup>
import { ref } from 'vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';

const backdrop_path = ref('url(https://image.tmdb.org/t/p/original/vViRXFnSyGJ2fzMbcc5sqTKswcd.jpg)')
</script>

<template>

    <div class="flex flex-col h-full w-full bg-fixed backdrop-container place-content-end">
        <div class="flex flex-col w-full h-full bg-black bg-opacity-40 justify-between">
            <div class="h-2/5 place-content-start">
                <div class="flex flex-row place-content-center min-h-full md:place-content-start">

                    <div class="flex flex-col h-80 -mt-10 md:-mt-0 md:pt-4 mx-4">
                        <!-- 'https://image.tmdb.org/t/p/original/' + result.poster_path -->
                        <img class="h-full w-full object-scale-down"
                            src="https://image.tmdb.org/t/p/original/uQBbjrLVsUibWxNDGA4Czzo8lwz.jpg">
                    </div>


                    <div class="flex flex-col px-4 w-full min-h-full md:w-2/5 place-content-start">
                        <div class="flex flex-col mt-5">
                            <div class="text-white text-xl font-bold pb-3">Jack Reacher</div>
                            <div class="text-gray-300 overflow-y-auto text-md text-justify">
                                <p class="line-clamp-5"> When a gunman takes five lives
                                    with
                                    six
                                    shots, all evidence points
                                    to the suspect in
                                    custody. On interrogation, the suspect offers up a single note: \"Get Jack
                                    Reacher!\" So
                                    begins
                                    an
                                    extraordinary chase for the truth, pitting Jack Reacher against an unexpected enemy,
                                    with a
                                    skill for
                                    violence and a secret to keep When a gunman takes five lives with six shots, all
                                    evidence
                                    points
                                    to the.
                                </p>

                            </div>
                        </div>
                        <PrimaryButton class="mt-4">Alugue este filme pelos proximos 2 dias.</PrimaryButton>
                    </div>
                </div>
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
    height: 70%;
    opacity: .7;
    z-index: -1;
    background-image: v-bind(backdrop_path);
    background-repeat: no-repeat;
    background-size: cover;
}
</style>