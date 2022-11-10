<script setup>
import { store } from '@/Services/store'
import { usePage } from '@inertiajs/inertia-vue3';
import { ref, watch, reactive } from 'vue'
import { StarIcon } from '@heroicons/vue/24/solid'
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { inject } from 'vue'

const swal = inject('$swal')
const title_detailment = ref(store.selected_title_detailment)
const treated_date = ref('')
const stars = ref('')
const form = reactive({
    movie_id: null,
    user_id: usePage().props.value.auth.user.id,
    movie_name: null,
})

watch(
    () => store.selected_title_detailment,
    (newValue, oldValue) => {
        title_detailment.value = store.selected_title_detailment

        treated_date.value = new Date(newValue.release_date).toLocaleDateString('en-US', {
            year: 'numeric',
        })

        stars.value = (newValue.vote_average / 2).toFixed(1)

        form.movie_id = newValue.id,
            form.movie_name = newValue.title
    },
    { deep: true }
)

const submit = async () => {
    axios.post(route('rent.store', form)).then(
        (response) => {
            if (!response.data.error) {
                swal.fire({
                    icon: 'success',
                    title: response.data.message,
                    showConfirmButton: true,
                });
            } else {
                swal.fire({
                    icon: 'error',
                    title: response.data.message,
                    showConfirmButton: true,
                });
            }
        }
    );
};
</script>

<template>
    <div class="flex flex-col place-content-start bg-black bg-opacity-60">
        <div class="flex flex-row place-content-start py-4 px-3 ">
            <div class="flex h-full w-2/6">
                <img v-if="title_detailment.poster_path != null" class="h-full w-full object-scale-down"
                    style="max-height: 60vh"
                    :src="'https://image.tmdb.org/t/p/original/' + title_detailment.poster_path">
                <img v-else src="/assets/poster-not-found.jpg" alt="Poster não encontrado"
                    class="h-full w-full object-scale-down" style="max-height: 60vh" />
            </div>
            <div class="flex flex-col px-4 min-h-full w-4/6 place-content-between">
                <div class="flex flex-col">
                    <div class="text-white text-xl font-bold pb-1">{{ title_detailment.title }}</div>
                    <div class="flex flex-row text-sm max-h-min text-white pb-4 pr-4">
                        <div class="flex flex-row max-h-min w-full">
                            <div>
                                <p>{{ treated_date }}</p>
                            </div>
                        </div>

                        <div class="flex flex-row max-h-min">
                            <div>
                                <p>Popularity:&nbsp;</p>
                            </div>
                            <div>
                                <p>{{ stars }}</p>
                            </div>
                            <div class="py-0 ml-1 mb-1">
                                <StarIcon class="h-full text-yellow-500" />
                            </div>

                        </div>
                    </div>
                    <div class="text-gray-300 overflow-y-auto text-md text-justify">
                        <p class="line-clamp-4">
                            {{ title_detailment.overview }}
                        </p>

                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col">
            <div class="flex flex-row place-self-end">
                <PrimaryButton @click="submit" class="py-3 lg:mr-4 lg:mb-3">Alugue este filme pelos proximos 2 dias.
                </PrimaryButton>
            </div>
        </div>
    </div>
</template>

<style>
.swal2-styled.swal2-confirm {
    background-color: rgb(6,47,44);
    padding-left: 3rem;
    padding-right: 3rem;
}
</style>