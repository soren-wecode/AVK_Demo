<template>
    <svg :fill="color" :height="iconSize" :width="iconSize" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
      <path fill-rule="evenodd" d="M14.615 1.595a.75.75 0 01.359.852L12.982 9.75h7.268a.75.75 0 01.548 1.262l-10.5 11.25a.75.75 0 01-1.272-.71l1.992-7.302H3.75a.75.75 0 01-.548-1.262l10.5-11.25a.75.75 0 01.913-.143z" clip-rule="evenodd" />
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