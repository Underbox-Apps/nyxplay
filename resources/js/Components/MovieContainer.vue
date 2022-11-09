<script setup>
import { ref } from 'vue'

const props = defineProps(['movie'])
const is_focused = ref(false)

//  result.id
const id = ref(75780)

const emit = defineEmits(['selectedMovie'])
const ToogleFocus = () => {
    emit('selectedMovie', id.value)
}
</script>
<template>
    <div @click="ToogleFocus()"
        class="flex flex-row h-full mx-2 my-2 w-max max-w-full max-h-screen grow place-content-start overflow-y-hidden">
        <div class="flex flex-col h-full min-w-fit">
            <!-- 'https://image.tmdb.org/t/p/original/' + result.poster_path -->
            <img v-if="props.movie.poster_path != null" class="h-full w-full object-scale-down shadow-transparent"
                :src="'https://image.tmdb.org/t/p/original' + props.movie.poster_path">
            <img v-else src="/assets/poster-not-found.jpg" alt="Poster não encontrado">
        </div>
    </div>
</template>