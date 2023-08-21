<template>
    <div class="flex justify-around gap-3 pb-8">
        <div>
            <p class="text-gray-700 text-sm">El-besparelse</p>
        </div>
        <div class="toggle">
            <vue-toggle activeColor="#206E64" name="vue-toggle" @toggle="handleToogle"/>
        </div>
        <div>
            <p class="text-gray-700 text-sm">Energimærke</p>
        </div>
    </div>
</template>

<script setup>
import VueToggle from 'vue-toggle-component';
import { computed } from 'vue';

const props = defineProps({
    modelValue: Boolean,
    id: String,
    disabled: Boolean,
})
const emit = defineEmits(['update:modelValue']);

const handleToogle = (val) => {
    emit('update:modelValue', val)
}
// const value = computed({
//     get() {
//         return props.modelValue
//     },
//     set(value) {
//         emit('update:modelValue', value)
//     }
// })

</script>

<style lang="scss">
    .toggle {
        margin-top: 2px;
        margin-left: 10px;   
    }
    .m-toggle__content {
        height: 20px!important;
        width: 40px!important;
    }
</style>