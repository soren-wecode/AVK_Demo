<template>
    <div class="message-area">
        <div class="message-list" ref="messageListRef" >
            <div v-for="(message, i) in messageList" :key="message.id" class="message" :class="message.type">
                <div v-if="message.type === 'source' && message.sources.length" class="sources">
                    Kilder:
                    <div v-for="source in message.sources">
                        <li><a :href="'/' + source.pdf_filename" target="_blank">{{ source.pdf_title }}</a></li>
                        <!-- <Source :source="source" /> -->
                    </div>
                </div>
                <template v-else-if="message.type !== 'source'">
                    <div class="logo-container">
                        <BoltSolid v-if="message.type === 'assistant'" color="#206E64" size="40"/>
                        <UserSolid v-else color="#206E64" size="40"/>
                    </div>
                    <div v-html="message.message" :class="{
						'animate-pulse': i > messageList.filter(m => m.type !== 'assistant').length - 1 && message.type !== 'assistant' && loading,
                    }"></div>
                </template>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref, watch } from 'vue';
import BoltSolid from '@Icons/BoltSolid.vue';
import UserSolid from '@Icons/UserSolid.vue';
import Source from '@/Components/Source.vue';

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
    .message-area {
        width: 80vw;
        height: 65vh;
        background: #ffffff;
        border-radius: 0.5rem;
        border: 1px solid #d9d9e3;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 16px;
        overflow: hidden;
        
        @media (max-width: 768px) {
            width: 95vw;
        }
    }
    .message-list {
        width: 100%;
        height: 100%;
        border-radius: 0.5rem;
        overflow: auto;
    }
    .message {
        display: flex;
        align-items: center;
        padding: 18px;
        color: #000;

        &:first-child {
            border-top-left-radius: 0.5rem;
            border-top-right-radius: 0.5rem;
        }
    }
    .sources {
        display: flex;
        flex-direction: column;
        margin-left: 66px;
    }
    .assistant, .source {
        background-color: #f9fafb;
    }
    .source {
        padding-top: 0;
    }
    .logo-container {
        display: flex;
        align-items: center;
        width: 48px;
        min-width: 48px;
        height: 48px;
        margin-right: 1rem;
        padding: 6px;
        border-radius: 0.1rem;
        background: #ffffff;
        box-shadow: 1px 2px 12px -3px rgba(0,0,0,0.75);
    }
    .logo {
        width: 48px;
        height: auto;
        margin-right: 1rem;
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