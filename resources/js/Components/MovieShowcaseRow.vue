<script setup>
defineProps({
    title: {
        type: String,
        default: '',
    },
});
</script>
<template>
    <div class="flex flex-col bg-black w-full bg-opacity-40 py-4">
        <div class="text-lg text-white text-bold">{{ title }}</div>
        <div class="flex flex-row">
            teste
        </div>
    </div>
</template>