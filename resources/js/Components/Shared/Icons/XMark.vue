<template>
    <svg fill="none" :height="iconSize" :width="iconSize" stroke-width="1.5" :stroke="color" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
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