<template>
    <div class="response-area overflow-auto border border-avk-blue">
        <div class="overflow-auto" ref="messageListRef" >
            <div v-for="(message, i) in messageList" :key="message.id" class="p-4" :class="message.type === 'assistant' ? 'bg-ghost-white' : ''">
                <div class="flex items-center">
                    <div class="flex items-center mr-4 p-1.5 w-12 h-12 bg-white logo-container">
                        <AVKLogo v-if="message.type === 'assistant'" size="40"/>
                        <UserSolid v-else size="40"/>
                    </div>
                    <div v-html="message.data.message" :class="{
                        'animate-pulse': i > messageList.filter(m => m.type !== 'assistant').length - 1 && message.type !== 'assistant' && loading,
                    }"></div>
                </div>
                <div v-if="message.data.orderProducts && message.data.orderProducts.length > 0">
                    <p>Here are your ordered products, are they correct?</p>
                    <div class="flex justify-center flex-wrap gap-x-2 pt-6 w-full">
                        <div v-for="product in message.data.orderProducts" class="w-[220px] min-w-[220px] pb-5">
                            <ProductCard :product="product.product" :amount="product.amount"/>
                        </div>
                    </div>
                    <!-- Dummy divs to keep items left aligned -->
                    <!-- <div class="w-[220px] min-w-[220px]"></div>
                    <div class="w-[220px] min-w-[220px]"></div>
                    <div class="w-[220px] min-w-[220px]"></div> -->
                </div>
                <div v-if="message.data.suggestedProducts && message.data.suggestedProducts.length > 0">
                    <p>Here are some suggestions for you</p>
                    <div class="flex justify-center flex-wrap gap-x-2 pt-6 w-full">
                        <div v-for="product in message.data.suggestedProducts" class="w-[220px] min-w-[220px] pb-5">
                            <ProductCard :product="product.product" :amount="product.amount"/>
                        </div>
                    </div>
                    <!-- Dummy divs to keep items left aligned -->
                    <!-- <div class="w-[220px] min-w-[220px]"></div>
                    <div class="w-[220px] min-w-[220px]"></div>
                    <div class="w-[220px] min-w-[220px]"></div> -->
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref, watch } from 'vue';
import ProductCard from './ProductCard.vue';
import AVKLogo from '@Icons/AVKLogo.vue';
import UserSolid from '@Icons/UserSolid.vue';

const props = defineProps({
    messageList: Array,
	loading: Boolean,
})

const messageListRef = ref(props.messageList);
watch(() => props.messageList, (val) => {
    window.setTimeout(() => {
        messageListRef.value.scrollTop = messageListRef.value.scrollHeight;
    }, 10)
}, { deep: true })

</script>

<style scoped lang="scss">
    .response-area {
        height: calc(100% - 57px);
    }
    .logo-container {
        border-radius: 0.1rem;
        box-shadow: 1px 2px 12px -3px rgba(0,0,0,0.75);
    }

    .animate-pulse {
		animation: pulse 2s infinite;
	}

    @keyframes pulse {
		0% {
			opacity: 0.4;
		}
        50% {
			opacity: 1;
		}
        100% {
			opacity: 0.4;
		}
	}
</style>