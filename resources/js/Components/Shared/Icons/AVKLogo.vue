<template>
    <svg :fill="color" :width="width" :height="height" xmlns="http://www.w3.org/2000/svg" viewBox="-17763 -1853.461 271.301 129.175">
        <path :fill="color" d="M220.57,49.4l-35.678,91.575L149.632,49.4H49.2V75.887h79.209L170.6,178.575H199.43L241.542,75.887H320.5V49.4Z" transform="translate(-17812.199 -1902.861)"></path>
        <path :fill="color" d="M49.2,92.8v26.152H74.935L49.2,185.8H76.94L82.2,171.174h43.2l5.932,14.622h28.325l-38.268-93Zm41.526,54.9,11.865-32.753L115.876,147.7Z" transform="translate(-17812.199 -1909.998)"></path>
        <path :fill="color" d="M295.973,127.96l13.87-35.26H281.1l-38.1,93h28.826l14.037-33.589,2.841.334L312.266,185.7h33.087l-30.247-39.772c22.81-6.016,30.5-26.988,30.5-26.988h6.684V92.7H326.053c.084,0-.585,32.837-30.08,35.26" transform="translate(-17844.071 -1909.982)"></path>
    </svg>
</template>

<script setup>
import { computed } from 'vue';

const props = defineProps({
    width: {
        type: String,
        default: '115'
    },
    height: {
        type: String,
        default: '55'
    },
    color: {
        type: String,
        default: '#0F2395'
    },
})

const iconSize = computed(() => props.size + 'px');
</script>