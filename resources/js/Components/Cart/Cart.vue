<template>
    <div class="w-full h-full px-6">
        <div class="text-xl text-avk-blue">
            Your Cart
        </div>
        <div v-if="products.length === 0" class="mt-20 text-avk-blue text-center">
            Your cart is empty
        </div>
    </div>
</template>

<script setup>
import { ref } from 'vue';

const products = ref([]);

</script>