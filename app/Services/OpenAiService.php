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
                'content' => $userMessage
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
                    If the customer wishes to add previous products to the cart, figure out based on the provided history which products the customer wishes to add to the cart, and add the to an array like this: "add_to_cart: [{"ref_number": product1, amount: X}, {"ref_number": product2, amount: X} ...]".
                    If the customer wishes to order products, add them to an array like this: "order_products: [{"ref_number": product1, amount: X}, {"ref_number": product2, amount: X} ...]".
                    If the customer wishes to add products directly to the cart, add them to an array like this: "products_direct_to_cart: [{"ref_number": product1, amount: X}, {ref_number: product2, amount: X} ...]". Only add products to this array if the customer has explicitly stated that they want to add the products to the cart.
                    If the customer wishes to remove products from the cart, add them to an array like this: "products_remove_from_cart: [{"ref_number": product1, amount: X}, {ref_number: product2, amount: X} ]".
                    If the customer wishes to change the amount of a product in the cart, addst should be the final amount after the change. Unless removing an entire product, this array should be used when making changes to the cart.
                    If the customer wishes to here suggestions on which products they should choose, add the relevant portion of the message to "product_suggestions".
                    If the customer has any questions not handled by any of the rules above, or is just genereally chatting, take the relevant parts out of the message and add thm to "chat".
                    The full format that you will always be returning is: {"add_to_cart": [], "order_products": [], "products_direct_to_cart": [], "products_remove_from_cart": [], "products_change_amount": [], "product_suggestions": false, "chat": ""}
                    The only exception to this is if an array is empty. Then it should not be included.
                    Current cart is:
                '
                . $this->getCurrentCart()
            ],
            [
                'role' => 'user',
                'content' => $userMessage
            ],
        ], true, 'gpt-4');
    }

    private function getCurrentCart() 
    {
        $user = auth()->user();
        $cart = $user->cart;

        if(!$cart) {
            return 'Empty';
        }

        $cartProducts = $cart->cartProducts()->with('productOption')->get();

        $cartString = '';

        foreach($cartProducts as $cartProduct) {
            $cartString .= $cartProduct->name . '('. $cartProduct->productOption->ref_nr . ') - ' . $cartProduct->amount . ' pcs. \n';
        }

        return $cartString;
    }

}
