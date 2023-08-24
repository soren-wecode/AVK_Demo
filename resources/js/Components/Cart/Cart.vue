<template>
    <div class="w-full h-full pl-6">
        <div class="text-xl text-avk-blue">
            Your Cart
        </div>
        <div v-if="store.products.length === 0" class="mt-20 text-avk-blue text-center">
            Your cart is empty
        </div>
        <table v-else class="w-full">
            <tr class="text-left">
                <th class="font-normal pb-2 pt-4">Item(s)</th>
                <th class="font-normal"></th>
                <th class="font-normal">Amount</th>
                <th class="font-normal">Price/pc</th>
                <th class="font-normal">Price (excl. VAT)</th>
            </tr>
            <template v-for="product in store.products">
                <CartProduct :product="product.product_option" :amount="product.amount" />
            </template>
        </table>
    </div>
</template>

<script setup>
import CartProduct from './CartProduct.vue';
import { useCartStore } from '@/stores/cart.js'
import { ref, onMounted } from 'vue';

const store = useCartStore()

onMounted(() => {
    store.getCart();
})

</script>