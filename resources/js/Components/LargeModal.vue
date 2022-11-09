<script setup>
import { XMarkIcon } from "@heroicons/vue/24/solid";
import { ref } from "vue";

const visible = ref(false)

const ToogleVisibility = () => {
    visible.value = !visible.value;
}

const closeModal = () => {
    visible.value = false;
}
</script>
<template>
    <!-- Modal toggle -->
    <div @click="ToogleVisibility()">
        <slot name="button"/>
    </div>

    <!-- Main modal -->
    <div class="flex place-content-center fixed w-full h-full top-0 left-0 bg-gray-500/50" v-show="visible">
        <div class="flex flex-col place-self-center bg-teal-700 w-4/5 md:w-1/2 lg:w-3/6 min-h-min rounded-lg">
            <div class="w-full flex flex-row place-content-end">
                <button class="close-button" @click="closeModal()">
                    <div
                        class="rounded-full overflow-hidden w-7 mx-2 my-2 self-center bg-white text-teal-300 hover:bg-teal-500">
                        <XMarkIcon class="stroke-teal-900" />
                    </div>
                </button>
            </div>
            <!-- Modal Body -->
            <slot name="body"/>
        </div>
    </div>
</template>