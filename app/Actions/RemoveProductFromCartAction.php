<?php

namespace App\Actions;

class RemoveProductFromCartAction
{
    public function execute($refNumber)
    {
        $user = auth()->user();
        $cart = $user->cart;

        $cart->cartProducts()->whereHas('productOption', fn($q) => $q
            ->where('ref_nr', $refNumber)
        )->delete();
    }

}
