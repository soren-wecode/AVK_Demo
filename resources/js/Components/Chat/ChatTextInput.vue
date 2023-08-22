<template>
    <div class="sm:col-span-3">
        <input
            v-model="value"
            type="text"
            :name="id"
            :id="id"
            :class="{ 'bg-gray-100': disabled }"
            class="relative w-full py-4 pl-4 pr-8 border border-t-0 border-avk-blue text-input"
            placeholder="What can I do for you?"
            :disabled="disabled"
        />
    </div>
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
.text-input:focus {
    outline: none;
    border-color: #6b7280;
    box-shadow: 0 0 0 3px rgba(156, 163, 175, 0.5);
}
</style>
