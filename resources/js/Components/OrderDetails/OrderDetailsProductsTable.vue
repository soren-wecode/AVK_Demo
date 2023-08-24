<template>
    <div class="overflow-auto">
        <div v-if="!store.products || store.products.length === 0" class="mt-20 text-avk-blue text-center">
            Your cart is empty
        </div>
        <table v-else class="w-full">
            <tr class="text-left border-b border-gray-300">
                <th class="font-normal pb-2 pt-4">Item(s)</th>
                <th class="font-normal">Amount</th>
                <th class="font-normal">Unit price (GBP)</th>
                <th class="font-normal">Price (GBP)</th>
            </tr>
            <template v-for="product in store.products">
                <OrderDetailsProduct :product="product.product_option" :amount="product.amount" />
            </template>
            <tr class="text-sm border-t-2 border-gray-300 leading-relaxed">
                <td class="px-2 text-left pt-4">Discount</td>
                <td></td>
                <td></td>
                <td class="pt-4">-{{ store.discountAmount.toFixed(2) }}</td>
            </tr>
            <tr class="text-sm leading-relaxed">
                <td class="px-2 text-left">Total excl. VAT (GBP)</td>
                <td></td>
                <td></td>
                <td>{{ store.totalPrice.toFixed(2) }}</td>
            </tr>
            <tr class="text-sm leading-relaxed">
                <td class="px-2 text-left">VAT 20%</td>
                <td></td>
                <td></td>
                <td>{{ store.VATAmount.toFixed(2) }}</td>
            </tr>
            <tr class="font-bold leading-relaxed">
                <td class="px-2 text-left">Total incl. VAT (GBP)</td>
                <td></td>
                <td></td>
                <td>{{ store.totalPriceWithVAT.toFixed(2) }}</td>
            </tr>
        </table>
    </div>
</template>

<script setup>
import OrderDetailsProduct from './OrderDetailsProduct.vue';
import { useCartStore } from '@/stores/cart.js'

const store = useCartStore()

</script>
