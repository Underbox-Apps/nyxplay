<script setup>
defineProps({
    type: {
        type: String,
        default: 'submit',
    },
});
</script>

<template>
    <button :type="type" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:font-bold active:font-bold focus:outline-none focus:font-bold transition ease-in-out duration-150">
        <slot />
    </button>
</template>
