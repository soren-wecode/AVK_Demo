<script setup>
defineProps({
    type: {
        type: String,
        default: 'button',
    },
});
</script>

<template>
    <button :type="type" class="w-[195px] flex justify-center items-center py-4 bg-white border border-avk-blue font-semibold text-sm text-avk-blue uppercase tracking-widest shadow-sm hover:text-avk-blue-dark hover:border-avk-blue-dark focus:outline-none focus:ring-0 active:text-gray-900 active:border-gray-900  disabled:opacity-25 transition ease-in-out duration-150">
        <slot />
    </button>
</template>
