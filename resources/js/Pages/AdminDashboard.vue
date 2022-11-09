<script setup>
import { usePage } from '@inertiajs/inertia-vue3';
import { computed } from 'vue';

let rents = computed(() => usePage().props.value.auth.rented_movies);
rents = JSON.parse(rents.value)

const PrepareDate = (date) => {
    let ready_date = new Date(date)
    ready_date = ready_date.toLocaleString('en-US', { timeZone: 'UTC' })
    return ready_date
}
</script>


<template>
        <div class="flex flex-col w-full h-full">
            <div class="overflow-x-hidden">
                <div class="py-2 inline-block w-full sm:px-6 lg:px-8">
                    <div class="overflow-hidden flex flex-row place-content-center">
                        <div class="border-4 border-teal-700 rounded-lg w-full lg:w-3/5 overflow-hidden">
                            <table class="min-w-full table-auto">
                                <thead class="bg-teal-500 text-gray-800">
                                    <tr>
                                        <th scope="col" class="pl-4 pr-3">ID</th>
                                        <th scope="col" class="pr-4 hidden md:table-cell">Movie Name</th>
                                        <th scope="col" class="pr-4 hidden md:table-cell">Customer Name</th>
                                        <th scope="col" class="hidden lg:table-cell">Rent Date</th>
                                        <th scope="col" class="pr-4 hidden lg:table-cell">Devolution In</th>
                                        <th scope="col" class="pr-4 lg:hidden table-cell text-left">Rent Data</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Table Body -->
                                    <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-300"
                                        v-for="rent in rents" :key="rent.id">
                                        <td class="whitespace-nowrap text-gray-900 pl-4 text-center">
                                            <b>{{ rent.id }}</b>
                                        </td>

                                        <td class="hidden md:table-cell whitespace-nowrap font-medium text-gray-900 pl-4 text-center">
                                            {{ rent.movie_name }}
                                        </td>

                                        <td class="hidden md:table-cell whitespace-nowrap text-gray-900 pl-4 text-center">
                                            {{ rent.user.name }}
                                        </td>

                                        <td
                                            class="hidden lg:table-cell whitespace-nowrap text-gray-900 pl-4 text-center">
                                            {{ PrepareDate(rent.created_at) }}
                                        </td>

                                        <td
                                            class="hidden lg:table-cell whitespace-nowrap text-gray-900 pr-4 text-center">
                                            {{ PrepareDate(rent.expiration_date) }}
                                        </td>

                                        <td
                                            class="lg:hidden table-cell whitespace-nowrap text-gray-900 pr-4 left-center">
                                            <div class="flex flex-col">
                                                <div class="inline md:hidden"> <b>Movie name: </b>{{ rent.movie_name }}</div>
                                                <div class="inline md:hidden"> <b>Customer: </b>{{ rent.user.name }}</div>
                                                <div> <b>Rented in: </b>{{ PrepareDate(rent.created_at) }}</div>
                                                <div> <b>Devolution in: </b> {{ PrepareDate(rent.expiration_date) }}
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</template>