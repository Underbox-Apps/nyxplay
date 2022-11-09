<script setup>
import { store } from '@/Services/store'
import { ref, watch } from 'vue'
import { StarIcon } from '@heroicons/vue/24/solid'
import PrimaryButton from '@/Components/PrimaryButton.vue';

const title_detailment = ref(store.selected_title_detailment)
const treated_date = ref('')
const stars = ref('')

watch(
    () => store.selected_title_detailment,
    (newValue, oldValue) => {
        title_detailment.value = store.selected_title_detailment

        treated_date.value = new Date(newValue.release_date).toLocaleDateString('en-US', {
            year: 'numeric',
            month: '2-digit',
            day: '2-digit',
        })

        stars.value = (5 * (newValue.popularity / 100)).toFixed(1)
    },
    { deep: true }
)
</script>

<template>
    <div>
        <div class="flex flex-row min-h-full place-content-start py-4 bg-black bg-opacity-60">
            <div class="flex flex-col h-80 mx-4">
                <!-- 'https://image.tmdb.org/t/p/original/' + result.backdrop_path -->
                <img class="h-full w-full object-scale-down"
                    :src="'https://image.tmdb.org/t/p/original/' + title_detailment.poster_path">
            </div>
            <div class="flex flex-col px-4 w-full min-h-full md:w-3/5 place-content-between">
                <div class="flex flex-col">
                    <!-- result.original_title -->
                    <div class="text-white text-xl font-bold pb-1">{{ title_detailment.title }}</div>
                    <div class="flex flex-row text-sm max-h-min text-white pb-4">
                        <div class="flex flex-row max-h-min w-full">
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
                        <p class="line-clamp-4">
                            {{ title_detailment.overview }}
                        </p>

                    </div>
                </div>
                <div class="flex flex-col place-self-start">
                    <PrimaryButton class="mt-4">Alugue este filme pelos proximos 2 dias.</PrimaryButton>
                </div>
            </div>
        </div>
    </div>
</template>