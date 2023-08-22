<template>
    <div class="h-full border border-avk-blue">
        <div class="overflow-auto" ref="messageListRef" >
            <div v-for="(message, i) in messageList" :key="message.id" class="flex items-center p-4" :class="message.type">
                <div class="flex items-center mr-4 p-1.5 w-12 h-12 bg-white logo-container">
                    <AVKLogo v-if="message.type === 'assistant'" size="40"/>
                    <UserSolid v-else size="40"/>
                </div>
                <div v-html="message.message" :class="{
                    'animate-pulse': i > messageList.filter(m => m.type !== 'assistant').length - 1 && message.type !== 'assistant' && loading,
                }"></div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref, watch } from 'vue';
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
    .message {

        &:first-child {
            border-top-left-radius: 0.5rem;
            border-top-right-radius: 0.5rem;
        }
    }
    .assistant {
        background: #F2F3F9;
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