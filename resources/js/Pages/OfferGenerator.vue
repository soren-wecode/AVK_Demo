<template>
    <AppLayout>
        <div class="w-1/2 h-full">
            <Chat />
        </div>
    </AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Chat from '@/Components/Chat/Chat.vue';
import axios from 'axios';
import { ref, onMounted, computed } from 'vue';



</script>
