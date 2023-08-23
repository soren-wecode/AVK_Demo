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

    public function getUserIntenion(string $userMessage)
    {
        return $this->client->SystemChat([
            [
                'role' => 'system',
                'content' => '
                    Based on the next user message, figure out what the customer wants you to do. Note that the customer can make multiple different requests in the same message. You will then add the requests to a json array, so the system can handle the requests.
                    If the customer wishes to add previous products to the cart, set "add_to_cart: true".
                    If the customer wishes to order products, add them to an array like this: "order_products: {{avk_number: product1, amount: X}, {avk_number: product2, amount: X} ...}".
                    If the customer wishes to add products directly to the cart, add them to an array like this: "products_direct_to_cart: {{avk_number: product1, amount: X}, {avk_number: product2, amount: X} ...}".
                    If the customer wishes to remove products from the cart, add them to an array like this: "products_remove_from_cart: {{avk_number: product1, amount: X}, {avk_number: product2, amount: X} ...}".
                    If the customer wishes to here suggestions on which products they should choose, add the relevant portion of the message to "product_suggestions".
                    If the customer has any questions not handled by any of the rules above, or is just genereally chatting, take the relevant parts out of the message and add thm to "chat".
                    The full format that you will always be returnig is: {"add_to_cart": false, "order_products": {}, "products_direct_to_cart": {}, "product_suggestions": false, "chat": ""}
                '
            ],
            [
                'role' => 'user',
                'content' => $userMessage
            ],
        ], 'gpt-4');
    }

}
