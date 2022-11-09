<script setup>
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { StarIcon } from '@heroicons/vue/24/solid'
import { ref } from 'vue'

const popularity = ref(78.707)
const release_date = ref('2012-12-20')

const treated_date = new Date(release_date.value).toLocaleDateString('en-US', {
    year: 'numeric',
    month: '2-digit',
    day: '2-digit',
})
const stars = (5 * (popularity.value / 100)).toFixed(1);
</script>
<template>
    <div class="flex flex-row min-h-full place-content-start py-4 bg-black bg-opacity-60">
        <div class="flex flex-col h-80 mx-4">
            <!-- 'https://image.tmdb.org/t/p/original/' + result.backdrop_path -->
            <img class="h-full w-full object-scale-down"
                src="https://image.tmdb.org/t/p/original/uQBbjrLVsUibWxNDGA4Czzo8lwz.jpg">
        </div>
        <div class="flex flex-col px-4 w-full min-h-full md:w-2/5 place-content-between">
            <div class="flex flex-col">
                <!-- result.original_title -->
                <div class="text-white text-xl font-bold pb-1">Jack Reacher</div>
                <div class="flex flex-row text-sm max-h-min text-white pb-4">
                    <div class="flex flex-row max-h-min w-2/6">
                        <div>
                            <p>Release Date:&nbsp;</p>
                        </div>

                        <div>
                            <p>{{ treated_date }}</p>
                        </div>
                    </div>

                    <div class="flex flex-row max-h-min">
                        <div>
                            <p>Popularity:&nbsp;</p>
                        </div>
                        <div class="py-1">
                            <StarIcon class="h-full text-yellow-500" />
                        </div>
                        <div>
                            <p>{{ stars }}/5</p>
                        </div>
                    </div>
                </div>
                <div class="text-gray-300 overflow-y-auto text-md text-justify">
                    <!-- result.overview -->
                    <p class="line-clamp-8"> When a gunman takes five lives
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
            <div class="flex flex-col place-self-start">
                <PrimaryButton class="mt-4">Alugue este filme pelos proximos 2 dias.</PrimaryButton>
            </div>
        </div>
    </div>
</template>