<template>
    <div class="flex flex-col h-full justify-between border border-avk-blue bg-white">
        <div>
            <div class="p-2 flex justify-between bg-avk-blue text-white text-xs">
                <div>Your Order: {{ amount }}</div>
                <div>Stock: {{ product.stock }}</div>
            </div>
            <div class="p-2 text-xs">
                <div class="h-11 pb-1 text-avk-blue text-sm">{{ product.product.name }}</div>
                <img :src="'product_images/' + product.product.image" class="w-auto h-40 py-4 mx-auto" />
                <div class="pt-4">{{ product.product.sub_title }}</div>
                <div class="pt-2 text-neutral-700">
                    <div class="font-bold">{{ product.product.variant_name }}</div>
                    <div>REF no.: {{ product.ref_nr }}</div>
                    <!-- <div>VVS no.: {{ product.vss_nr ?? '-' }}</div> -->
                </div>
                <div class="pt-2 text-neutral-600">
                    <div class="flex justify-between">
                        <span>Material:</span>
                        <span>{{ product.product.material }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span>DN:</span>
                        <span>{{ product.dn }}</span>
                    </div>
                    <div v-if="product.product.pn" class="flex justify-between">
                        <span>PN:</span>
                        <span>{{ product.product.pn }}</span>
                    </div>
                    <div v-if="product.product.closing_direction" class="flex justify-between">
                        <span>Closing direction:</span>
                        <span>{{ product.product.closing_direction }}</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-evenly mt-4 text-avk-blue text-sm">
            <a :href="product.product.url" target="__blank" class="flex flex-col items-center">
                <QuestionIcon />
                <span>Details</span>
            </a>
            <div class="flex flex-col items-center cursor-pointer" @click="addToCart()">
                <CartIcon />
                <span>Add to cart</span>
            </div>
        </div>
    </div>
</template>

<script setup>
import CartIcon from '@Icons/Cart.vue';
import QuestionIcon from '@Icons/Question.vue';
import { useCartStore } from '@/stores/cart.js'

const props = defineProps({
    product: Object,
    amount: Number,
})

const store = useCartStore()

const addToCart = () => {
    store.addToCart(props.product, props.amount)
}

</script>