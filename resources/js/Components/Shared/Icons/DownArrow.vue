<template>
    <svg :height="iconSize" :width="iconSize" fill="none" stroke-width="1.5" :stroke="color" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" >
      <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
    </svg>
</template>

<script setup>
import { computed } from 'vue';

const props = defineProps({
    size: {
        type: String,
        default: '20'
    },
    color: {
        type: String,
        default: '#000000'
    },
})

const iconSize = computed(() => props.size + 'px' );
</script>