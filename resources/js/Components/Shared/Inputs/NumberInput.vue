<template>
    <div class="relative">
        <input
            ref="input"
            class="w-full p-2 bg-grey border-white focus:ring-0 focus:border-transparent"
            :value="modelValue"
            @input="updateValue($event.target.value)"
        >
        <UpArrow class="absolute top-[7px] right-[8px] cursor-pointer" size="14" @click="updateValue(parseInt(modelValue) + 1)"/>
        <DownArrow class="absolute bottom-[7px] right-[8px] cursor-pointer" size="14" @click="updateValue(parseInt(modelValue) - 1)"/>
    </div>
</template>

<script setup>
import UpArrow from '@Icons/UpArrow.vue';
import DownArrow from '@Icons/DownArrow.vue';
import { onMounted, ref } from 'vue';

const props = defineProps({
    modelValue: String | Number,
    min: Number,
    max: Number
});

const emit = defineEmits(['update:modelValue']);

const updateValue = (value) => {
    let newValue = value;
    if (value < props.min) {
        newValue = props.min;
    }

    emit('update:modelValue', newValue);
};

const input = ref(null);

onMounted(() => {
    if (input.value.hasAttribute('autofocus')) {
        input.value.focus();
    }
});

defineExpose({ focus: () => input.value.focus() });
</script>
