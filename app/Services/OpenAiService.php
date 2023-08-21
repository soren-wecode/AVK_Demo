<?php

namespace App\Services;

use App\Clients\OpenAiClient;

class OpenAiService
{
    public function __construct(
        public readonly OpenAiClient $client,
    ) {
    }

    public function chat(string $userMessage, string $context, bool $streamed = false)
    {
        $messages = [
            [
                'role' => 'system',
                'content' => 'Answer the next message based on the following context. 
                    Context: ' . $context
            ],
            [
                'role' => 'user',
                'content' => 
                    'Question: ' . $userMessage
            ],
        ];

        if($streamed) {
            return $this->client->StreamChat($messages,);
        }

        return $this->client->Chat($messages);
    }

    public function saveToHistory(string $message, $role = 'system')
    {
        $msg = [
            'role' => $role,
            'content' => $message
        ];

        session()->push('chat_history', $msg);
    }

}
