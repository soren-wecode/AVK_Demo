<template>
    <div data-state="closed" data-orientation="vertical" class="border-b border-b-slate-200">
        <h3 data-orientation="vertical" data-state="closed" class="flex">
            <button type="button" aria-controls="radix-:r3:" aria-expanded="false" data-state="closed" data-orientation="vertical" id="radix-:r1:" class="flex flex-1 items-center justify-between py-4 font-medium transition-all hover:underline [&amp;[data-state=open]>svg]:rotate-180" data-radix-collection-item="">
                <h3>{{ source.pdf_title }}</h3>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4 transition-transform duration-200">
                    <polyline points="6 9 12 15 18 9"></polyline>
                </svg>
            </button>
        </h3>
        <div data-state="closed" id="radix-:r3:" role="region" aria-labelledby="radix-:r1:" data-orientation="vertical" class="data-[state=open]:animate-accordion-down data-[state=closed]:animate-accordion-up overflow-hidden text-sm transition-all" style="--radix-accordion-content-height: var(--radix-collapsible-content-height); --radix-accordion-content-width: var(--radix-collapsible-content-width); --radix-collapsible-content-height: 92px; --radix-collapsible-content-width: 1383px;">
            <div class="pt-0 pb-4">
                <p>{{ source.text }}</p>
                <p class="mt-2">
                    <b>Kilde:</b>  {{ source.pdf_filename }}
                </p>
            </div>
        </div>
    </div>
</template>

<script setup>

const props = defineProps({
    source: Object,
})

</script>

<style scoped lang="scss">
    
</style>