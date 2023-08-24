<template>
    <div class="flex justify-center gap-8 mt-20">
        <SecondaryButton @click="back">Back</SecondaryButton>
        <PrimaryButton>Confirm order</PrimaryButton>
    </div>
</template>

<script setup>
import PrimaryButton from '@Buttons/PrimaryButton.vue';
import SecondaryButton from '@Buttons/SecondaryButton.vue';
import { useCartStore } from '@/stores/cart.js'
import { router } from '@inertiajs/vue3'

const store = useCartStore()

const back = () => {
    router.visit('/chat');
}

</script>