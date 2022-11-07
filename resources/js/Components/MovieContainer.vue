<script setup>
import { ref } from 'vue'
const is_focused = ref(false)

const ToogleFocus = () => {
    console.log('focused')
}
</script>
<template>
    <div @click="ToogleFocus()" class="flex flex-row h-full mx-2 my-2 w-max max-w-full grow place-content-start shadow-md shadow-black">
        <div class="flex flex-col h-full min-w-fit">
            <!-- 'https://image.tmdb.org/t/p/original/' + result.poster_path -->
            <img class="h-full w-full object-scale-down"
                src="https://image.tmdb.org/t/p/original/uQBbjrLVsUibWxNDGA4Czzo8lwz.jpg">
        </div>
    </div>
</template>