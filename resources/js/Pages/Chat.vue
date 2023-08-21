<template>
    <div class="container">
        <div class="top-row">
            <div class="logo-container">
                <img src="/icons/NRGi_logo.png" class="logo" /> 
                <div class="logo-text">DIGITAL ENERGIRÅDGIVER</div>
            </div>
            <Toggle 
                v-model="toggle"
                id="toggle"
            />
        </div>
        
        <ResponseArea
            :messageList="messageList"
            :loading="loading"
        />
        <div class="user-input">
            <div class="input-container">
                <BaseTextInput
                    id="userInput"
                    label="Navn"
                    v-model="userInput"
                    @keyup.enter.prevent="submit"
                />
                <button class="submit-btn" @click="submit">
                    <svg viewBox="0 0 20 20" class="svg" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</template>

<script setup>
import ResponseArea from '@/ResponseArea.vue';
import BaseTextInput from '@Inputs/BaseTextInput.vue';
import axios from 'axios';
import { ref, onMounted, computed } from 'vue';
import Toggle from '@/Toggle.vue';

const userInput = ref('');
const messageList = ref([
    {
        message: 'Starter...',
        type: 'assistant',
    },
]);
const streamAnswers = ref(true);
const toggle = ref(false);
const loading = ref(false);
const questionType = computed(() => {
    return toggle.value ? 'Energimærke' : 'El-besparelse';
})

onMounted(async () => {
    await axios.get('chat/init')
        .then((response) => {
            messageList.value.pop();

            messageList.value.push({
                message: response.data,
                type: 'assistant',
            })
        })
})

async function submit() {
    const input = userInput.value;
    userInput.value = '';

    messageList.value.push({
        message: input,
        type: 'user',
    })

    if (!input) {
        messageList.value.push({
            message: 'Jeg er desværre ikke tankelæser. Indtast venligst din besked i tekstfeltet.',
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
    data.append('type', questionType.value,);

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
        message: '',
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
        message: 'Øjblik, jeg tjekker lige mine noter...',
        type: 'assistant',
        })
    
    await axios.post('chat/chat', {
        message: input,
        type: questionType.value,
    })
        .then((response) => {
            messageList.value.pop();

            if (response.data.error) {
                writeMessage(response.data.error);
            } else {
                writeMessage(response.data.message);
            } 
        }).catch((error) => {
            handleError(error.response.data);
        })
}

function writeMessage(message) {
    messageList.value.push({
        message: message,
        type: 'assistant',
    })
}
function writeSources(sources) {
    messageList.value.push({
        sources: sources,
        type: 'source',
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

<style lang="scss" scoped>
$width: 80vw;
$mobileWidth: 95vw;
.container {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: center;
    width: 85vw;
    max-width: 85vw;
    margin: auto;
    padding: 2rem;
    font-family: Lato, sans-serif;

    @media (max-width: 768px) {
        width: $mobileWidth;
        max-width: $mobileWidth;
        padding: 2rem 0;
    }
}

.top-row {
    display: flex;
    justify-content: space-between;
    width: 80vw;
}
.logo-container {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
}
.logo-text{
    padding-left: 2px;
    color: #206E64;
    font-size: 20px;
    // color: #1E4C48;
}
.logo {
    width: 110px;
    height: auto;
    align-self: start;
}
.input-container {
    position: relative;
    width: $width;

    @media (max-width: 768px) {
        width: $mobileWidth;
    }
}
.user-input {
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
    padding: 1rem 0;
    flex-direction: column;
    width: 100%
}
.submit-btn {
    position: absolute;
    top: 22px;
    right: 10px;
    color: rgb(165, 162, 162);
    background: none;
    padding: 0.3rem;
    border: none;
    display: flex;
    cursor: pointer;

    &:hover {
        background: #e4575726;
        border-radius: 0.2rem;
    }
}
.svg {
    transform: rotate(90deg);
    width: 1.2em;
    height: 1.2em;
    fill: currentColor;
}
</style>
