<template>
    <tr class="odd:bg-grey">
        <td class="p-2">
            <div class="font-bold">{{ product.product.name }}</div>
            <div class="text-sm">AVK no.: {{ product.ref_nr }}</div>
        </td>
        <td>{{ amount }}</td>
        <td>{{ product.price.toLocaleString("en-UK", { maximumFractionDigits: 2 }) }}</td>
        <td>{{ totalPrice }}</td>
    </tr>
</template>

<script setup>
import { useCartStore } from '@/stores/cart.js'
import { computed } from 'vue';

const props = defineProps({
    product: Object,
    amount: Number,
})

const store = useCartStore()

const totalPrice = computed(() => {
    return (props.product.price * props.amount).toLocaleString("en-UK", { maximumFractionDigits: 2 });
})

const removeFromCart = () => {
    store.removeFromCart(props.product)
}

</script>