<template>
    <AppLayout>
        <div class="w-1/2 h-full">
            <Chat />
        </div>
        <div class="w-1/2 h-full">
            <Cart />
        </div>
    </AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Chat from '@/Components/Chat/Chat.vue';
import Cart from '@/Components/Cart/Cart.vue';
import axios from 'axios';
import { ref, onMounted, computed } from 'vue';



</script>
