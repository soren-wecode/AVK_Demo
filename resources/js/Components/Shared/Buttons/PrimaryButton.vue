<script setup>
defineProps({
    type: {
        type: String,
        default: 'submit',
    },
});
</script>

<template>
    <button :type="type" class="w-[195px] flex justify-center items-center py-4 bg-avk-blue border border-transparent font-semibold text-sm text-white uppercase tracking-widest hover:bg-avk-blue-dark focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-0 transition ease-in-out duration-150">
        <slot />
    </button>
</template>
