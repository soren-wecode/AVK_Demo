<template>
    <input
        ref="input"
        class="h-15 px-5 text-lg border-2 caret-avk-blue border-avk-blue focus:border-avk-blue focus:ring-0 focus:shadow-dark-blur-1 shadow-sm transition ease-in-out duration-75"
        :value="modelValue"
        @input="$emit('update:modelValue', $event.target.value)"
    >
</template>

<script setup>
import { onMounted, ref } from 'vue';

defineProps({
    modelValue: String,
});

defineEmits(['update:modelValue']);

const input = ref(null);

onMounted(() => {
    if (input.value.hasAttribute('autofocus')) {
        input.value.focus();
    }
});

defineExpose({ focus: () => input.value.focus() });
</script>
