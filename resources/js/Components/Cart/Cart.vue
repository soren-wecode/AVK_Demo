<template>
    <div class="w-full h-full pl-6">
        <div class="text-xl text-avk-blue">
            Your Cart
        </div>
        <div class="cart flex flex-col justify-between">
            <ProductsTable />
            <div>
                <CartTotal />
                <CartButtons />
            </div>
        </div>
    </div>
</template>

<script setup>
import ProductsTable from './ProductsTable.vue';
import CartTotal from './CartTotal.vue';
import CartButtons from './CartButtons.vue';
import { useCartStore } from '@/stores/cart.js';
import { onMounted } from 'vue';

const store = useCartStore()

onMounted(() => {
    store.getCart();
})

</script>

<style scoped>
    .cart{
        height: calc(100% - 28px);
    }
</style>
