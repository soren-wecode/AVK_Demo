<template>
    <AppLayout :centered="true">
        <div class="w-1/2 h-full pl-6">
            <div class="text-xl text-avk-blue">
                Order details
            </div>
            <div class="flex flex-col justify-between">
                <OrderDetailsProductsTable />
                <OrderDetailsButtons />
            </div>
        </div>
    </AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import OrderDetailsProductsTable from '@/Components/OrderDetails/OrderDetailsProductsTable.vue';
import OrderDetailsButtons from '@/Components/OrderDetails/OrderDetailsButtons.vue';
import OrderDetailsTotal from '@/Components/OrderDetails/OrderDetailsTotal.vue';
import { useCartStore } from '@/stores/cart.js'
import { onMounted } from 'vue';

const store = useCartStore()

onMounted(() => {
    store.getCart();
})

</script>

<style scoped>
    .details {
        height: calc(100% - 28px);
    }
</style>