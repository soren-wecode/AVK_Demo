<template>
    <div class="overflow-auto">
        <div v-if="!store.products || store.products.length === 0" class="mt-20 text-avk-blue text-center">
            Your cart is empty
        </div>
        <table v-else class="w-full border-separate border-spacing-x-2">
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

const store = useCartStore()

</script>
