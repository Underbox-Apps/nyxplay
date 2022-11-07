<script setup>
import { ref } from 'vue'
const is_focused = ref(false)

const ToogleFocus = () => {
    is_focused.value = !is_focused.value
}
</script>
<template>
    <div @click="ToogleFocus()" class="flex flex-row h-full mx-2 my-2 w-max max-w-full grow place-content-start shadow-md shadow-black">
        <div class="flex flex-col h-full min-w-fit">
            <!-- 'https://image.tmdb.org/t/p/original/' + result.poster_path -->
            <img class="h-full w-full object-scale-down"
                src="https://image.tmdb.org/t/p/original/uQBbjrLVsUibWxNDGA4Czzo8lwz.jpg">
        </div>

        <div v-if="is_focused" class="flex flex-col w-full max-w-lg h-full place-self-start bg-black bg-opacity-50 pr-4 pl-5 py-3">
            <!-- result.title -->
            <div class="text-white text-xl font-bold pb-3">Jack Reacher</div>

            <!-- result.overview -->
            <div class="text-gray-300 overflow-y-auto text-sm text-justify">When a gunman takes five lives with six
                shots, all evidence points
                to the suspect in
                custody. On interrogation, the suspect offers up a single note: \"Get Jack Reacher!\" So begins an
                extraordinary chase for the truth, pitting Jack Reacher against an unexpected enemy, with a skill for
                violence and a secret to keep When a gunman takes five lives with six shots, all evidence points to the.
            </div>
        </div>
    </div>
</template>