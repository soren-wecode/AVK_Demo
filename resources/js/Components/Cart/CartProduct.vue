<template>
    <tr class="border-t border-gray-300">
        <td class="py-3"><img :src="'product_images/' + product.product.image" class="w-auto h-8" /></td>
        <td class="text-avk-blue">
            <div class=mr-3>
                <div class="font-bold">{{ product.product.name }}</div>
                <div class="text-sm">AVK no.: {{ product.ref_nr }}</div>
            </div>
        </td>
        <td >
            <NumberInput v-model="quantity" :min="1" :max="product.stock" class="w-24 mr-3"/>
        </td>
        <td>
            <div class=mr-3>{{ product.price.toLocaleString("en-UK", { style: "currency", currency: "GBP" }) }}</div>
        </td>
        <td class="font-bold">
            <div class=mr-3>{{ totalPrice }}</div>
        </td>
        <td class="cursor-pointer">
            <XMark size="24" @click="removeFromCart"/>
        </td>
    </tr>
</template>

<script setup>
import XMark from '@Icons/XMark.vue';
import NumberInput from '@Inputs/NumberInput.vue';
import { useCartStore } from '@/stores/cart.js'
import { computed } from 'vue';

const props = defineProps({
    product: Object,
    amount: Number,
})

const quantity = computed({
    get() {
        return props.amount
    },
    set(value) {
        store.updateAmount(props.product, value)
    }
})

const store = useCartStore()

const totalPrice = computed(() => {
    return (props.product.price * props.amount).toLocaleString("en-UK", { style: "currency", currency: "GBP" });
})

const removeFromCart = () => {
    store.removeFromCart(props.product)
}

</script>