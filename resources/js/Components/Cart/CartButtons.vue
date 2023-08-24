<template>
    <div class="flex justify-center gap-8 mt-6">
        <SecondaryButton class="px-8" @click="discardCart">Discard items</SecondaryButton>
        <PrimaryButton class="px-10">Place order</PrimaryButton>
    </div>
</template>

<script setup>
import { useCartStore } from '@/stores/cart.js'
import PrimaryButton from '@Buttons/PrimaryButton.vue';
import SecondaryButton from '@Buttons/SecondaryButton.vue';

const store = useCartStore()

const discardCart = () => {
    store.discardCart();
}

</script>