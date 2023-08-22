<template>
    <div class="flex items-center text-avk-blue">
        <div class="mr-3">
            {{ user.name }}
        </div>
        <div class="flex items-center border border-avk-blue p-1">
            <UserSolid size="28" />
        </div>
    </div>
</template>

<script setup>
import UserSolid from '@Icons/UserSolid.vue';
import { usePage } from '@inertiajs/vue3'
import { computed } from 'vue'

const page = usePage()
const user = computed(() => page.props.user)

</script>

<style lang="scss">
</style>