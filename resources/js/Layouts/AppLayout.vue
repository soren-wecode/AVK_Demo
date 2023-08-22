<template>
    <div class="w-full px-15 pt-6">
        <Navigation />
        <main>
            <slot />
        </main>
    </div>
</template>

<script setup>
import Logo from '@/Components/Logo.vue';
import Navigation from '@/Components/Navigation.vue';

</script>
<!-- .top-row {
    display: flex;
    justify-content: space-between;
    width: 80vw;
} -->
