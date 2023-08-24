<template>
    <div class="w-full px-15 pt-6">
        <Navigation />
        <main class="flex h-[85vh]">
            <slot />
        </main>
    </div>
</template>

<script setup>
import Navigation from '@/Components/Navigation.vue';

</script>
