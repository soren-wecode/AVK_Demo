<template>
    <textarea
        v-model="value"
        type="text"
        :name="id"
        :id="id"
        rows="2"
        :class="{ 'bg-gray-100' : disabled }"
        class="text-input"
        placeholder="Spørg mig om noget ..."
        :disabled="disabled"
        @keydown.enter.prevent=""
    />
</template>

<script setup>
import { computed } from 'vue';

const props = defineProps({
    modelValue: String,
    id: String,
    disabled: Boolean,
})
const emit = defineEmits(['update:modelValue']);

const value = computed({
    get() {
        return props.modelValue
    },
    set(value) {
        emit('update:modelValue', value)
    }
})
</script>

<style scoped>
.text-input {
    position: relative;
    font-size: 1.1rem;
    padding: 1rem 2rem 1rem 2rem;
    width: 100%;
    border-radius: 0.5rem;
    border: 1px solid #d9d9e3;
    background: #ffffff;
    color: #000;
    outline: none;
    resize: none;
    font-family: Lato, sans-serif;

    &:focus {
        outline: none;
        border-color: #6b7280;
        box-shadow: 0 0 0 3px rgba(156, 163, 175, 0.5);
    }
}
</style>
