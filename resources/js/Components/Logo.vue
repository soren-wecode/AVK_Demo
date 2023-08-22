<template>
    <a :href="route('chat.index')" title="Gå til forsiden" >
        <div class="flex text-avk-blue">
            <AVKLogo width="80px" height="38px" />
            <div class="ml-4 text-[30px] leading-6 text-avk-blue">United Kingdom</div>
        </div>
    </a>
</template>

<script setup>
import AVKLogo from '@Icons/AVKLogo.vue';

</script>

<style lang="scss">
</style>