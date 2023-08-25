<template>
    <div class="sm:col-span-3">
        <input
            v-model="value"
            type="text"
            :name="id"
            :id="id"
            :class="{ 'bg-gray-100': disabled }"
            class="relative w-full py-4 pl-4 pr-8 border border-t-0 border-avk-blue focus:caret-avk-blue focus:border-avk-blue focus:ring-0 focus:shadow-dark-blur-2 transition ease-in-out duration-75"
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
