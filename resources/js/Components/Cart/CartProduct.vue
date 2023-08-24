<template>
    <tr class="border-t-2 border-gray-300">
        <td class="py-3"><img :src="'product_images/' + product.product.image" class="w-auto h-8" /></td>
        <td class="text-avk-blue">
            <div class="font-bold">{{ product.product.name }}</div>
            <div class="text-sm">AVK no.: {{ product.avk_nr }}</div>
        </td>
        <td>{{ amount }}</td>
        <td>£ {{ product.price }}</td>
        <td>£ {{ totalPrice }}</td>
        <td class="cursor-pointer">
            <XMark size="24" @click="removeFromCart"/>
        </td>
    </tr>
</template>

<script setup>
import XMark from '@Icons/XMark.vue';
import { useCartStore } from '@/stores/cart.js'
import { computed } from 'vue';

const props = defineProps({
    product: Object,
    amount: Number,
})

const store = useCartStore()

const totalPrice = computed(() => {
    return props.product.price * props.amount
})

const removeFromCart = () => {
    store.removeFromCart(props.product)
}

</script>