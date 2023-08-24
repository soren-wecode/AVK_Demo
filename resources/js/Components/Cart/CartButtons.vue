<template>
    <div class="flex justify-center gap-8 mt-6">
        <SecondaryButton @click="discardCart">Discard items</SecondaryButton>
        <PrimaryButton @click="placeOrder">Place order</PrimaryButton>
    </div>
</template>

<script setup>
import PrimaryButton from '@Buttons/PrimaryButton.vue';
import SecondaryButton from '@Buttons/SecondaryButton.vue';
import { useCartStore } from '@/stores/cart.js'
import { router } from '@inertiajs/vue3'

const store = useCartStore()

const discardCart = () => {
    store.discardCart();
}

const placeOrder = () => {
    router.visit('/order-details');
}

</script>