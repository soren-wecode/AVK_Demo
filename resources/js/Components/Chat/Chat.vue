<template>
    <div class="w-full h-full">
        <ResponseArea
            :messageList="messageList"
            :loading="loading"
        />
        <div class="relative">
            <div class="relative w-full">
                <ChatTextInput
                    id="userInput"
                    label="Navn"
                    v-model="userInput"
                    @keyup.enter.prevent="submit"
                />
                <button class="absolute top-4 right-2 p-1 text-avk-blue hover:text-black" @click="submit">
                    <ChatArrow />
                </button>
            </div>
        </div>
    </div>
</template>

<script setup>
import ResponseArea from './ResponseArea.vue';
import ChatTextInput from './ChatTextInput.vue';
import ChatArrow from '@Icons/ChatArrow.vue';
import { useCartStore } from '@/stores/cart.js'
import axios from 'axios';
import { ref, onMounted, computed } from 'vue';

const userInput = ref('');
const messageList = ref([
    {
        data: { message: 'Starting...' },
        type: 'assistant',
    },
]);
const streamAnswers = ref(false);
const toggle = ref(false);
const loading = ref(false);

const store = useCartStore()

onMounted(async () => {
    await axios.get('chat/init')
        .then((response) => {
            messageList.value.pop();

            messageList.value.push({
                data: { message: response.data },
                type: 'assistant',
            })
        })
})

async function submit() {
    const input = userInput.value;
    userInput.value = '';

    messageList.value.push({
        data: { message: input },
        type: 'user',
    })

    if (!input) {
        messageList.value.push({
            data: { message: 'Jeg er desværre ikke tankelæser. Indtast venligst din besked i tekstfeltet.' },
            type: 'assistant',
        })
        return;
    }

    handleRequest(input);
}

function handleRequest(input) {
    if (streamAnswers.value) {
        streamChat(input);
    } else {
        standardChat(input);
    }
}


async function streamChat(input,) {
	loading.value = true;
    const csrfToken = document.head.querySelector("[name~=csrf_token][content]").content;

    let data = new FormData();
    data.append('message', input);
    // data.append('type', questionType.value,);

    const myRequest = new Request("chat/chat", {
        'method': 'POST',
        'credentials': "same-origin",
        'headers': { 'X-CSRF-Token': csrfToken},
        'body': data
    });

    const response = await fetch(myRequest);

    if(response.status !== 200) {
		loading.value = false;
        handleError(response);
        return;
    }

    messageList.value.push({
        data: { message: '' },
        type: 'assistant',
    })

    const reader = response.body.getReader();
    while (true) {
        const { done, value } = await reader.read();
        if (done) {
            break;
        }
        messageList.value.at(-1).message += new TextDecoder().decode(value);
    }   

    const sources = await axios.get('chat/get-source');
    
    const reducedSources = Object.values(
        sources.data.reduce((source, obj) => ({ ...source, [obj.pdf_title]: obj }), {})
    );

	loading.value = false;

    writeSources(reducedSources);
}

async function standardChat(input) {
    messageList.value.push({
        data: { message: 'Please give me a moment while a handle your request' },
        type: 'assistant',
    })
    
    await axios.post('chat/chat', {
        message: input,
        // type: questionType.value,
    })
        .then((response) => {
            messageList.value.pop();

            if (response.data.error) {
                writeMessage(response.data.error);
            } else {
                // writeMessage(response.data.message);
                writeMessage(response.data);
            } 

            store.getCart();
        }).catch((error) => {
            handleError(error.response.data);
        })
}

function writeMessage(data) {
    messageList.value.push({
        data: data,
        type: 'assistant',
    })
}

const handleError = (error) => {
    if (!streamAnswers.value) {
        messageList.value.pop();
    }

    console.log(error.exception);
    if (error.exception == "Symfony\\Component\\HttpKernel\\Exception\\HttpException") {
        writeMessage(error.message);
    } else {
        writeMessage('Undkyld, der er sket en fejl. Prøv venligst igen.');
        console.log(error);
    }
}

</script>
