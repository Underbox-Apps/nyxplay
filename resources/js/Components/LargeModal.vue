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
        <slot name="button" />
    </div>

    <!-- Main modal -->
    <div class="flex place-content-center fixed w-full top-0 left-0 bg-gray-500/50" v-show="visible"
        style="height:100vh;">
        <div class="flex flex-col place-self-center bg-teal-700 max-h-full modal-component rounded-lg">
            <div class="w-full flex flex-row place-content-end">
                <button class="close-button" @click="closeModal()">
                    <div
                        class="rounded-full overflow-hidden w-7 mx-2 my-2 self-center bg-white text-teal-300 hover:bg-teal-500">
                        <XMarkIcon class="stroke-teal-900" />
                    </div>
                </button>
            </div>
            <!-- Modal Body -->
            <slot name="body" />
        </div>
    </div>
</template>

<style>
.modal-component {
    max-height: 85vh;
    width: 100vw;
}

@media (min-width: 768px) {
    .modal-component {
        width: 80vw;
    }
}

@media (min-width: 1024px) {
    .modal-component {
        width: 60vw;
    }
}

@media (min-width: 1280px) {
    .modal-component {
        width: 50vw;
    }
}
</style>