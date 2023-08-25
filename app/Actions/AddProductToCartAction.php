<?php

namespace App\Actions;

use App\Models\ProductOption;

class AddProductToCartAction
{
    public function execute($refNumber, $amount = 1)
    {
        $user = auth()->user();
        $cart = $user->cart;

        if (!$cart) {
            $cart = $user->cart()->create();
        }

        $cart->cartProducts()->whereHas('productOption', fn($q) => $q
            ->where('ref_nr', $refNumber)
        )
            ->updateOrCreate(
                ['product_option_id' => ProductOption::where('ref_nr', $refNumber)->first()->id], 
                ['amount' => $amount]
            );
    }

}
