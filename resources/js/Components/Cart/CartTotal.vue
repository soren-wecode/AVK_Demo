<template>
    <div class="w-full p-3 text-avk-blue bg-ghost-white">
        <table class="w-full">
            <tr class="text-sm">
                <td class="text-left">Discount</td>
                <td class="text-right">- {{ store.discountAmount.toLocaleString("en-UK", { style: "currency", currency: "GBP" }) }}</td>
            </tr>
            <tr class="font-bold">
                <td class="text-left">Total (excl. VAT)</td>
                <td class="text-right">	{{ store.totalPrice.toLocaleString("en-UK", { style: "currency", currency: "GBP" }) }}</td>
            </tr>
        </table>
    </div>
</template>

<script setup>
import { useCartStore } from '@/stores/cart.js'

const store = useCartStore()

</script>