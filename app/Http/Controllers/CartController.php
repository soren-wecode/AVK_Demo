<?php

namespace App\Http\Controllers;

use App\Models\ProductOption;
use Illuminate\Http\Request;

class CartController
{
    public function get()
    {
        $user = auth()->user();
        $cart = $user->cart;

        return response()->json($cart->load('cartProducts', 'cartProducts.productOption', 'cartProducts.productOption.product'));
    }

    public function addProduct(Request $request)
    {
        $user = auth()->user();
        $cart = $user->cart;

        if(!$cart) {
            $cart = $user->cart()->create();
        }

        $cart->cartProducts()->updateOrCreate(['product_option_id' => $request->product_id], ['amount' => request()->amount]);

        return response()->json($cart->load('cartProducts', 'cartProducts.productOption', 'cartProducts.productOption.product'));
    }

    public function removeProduct(Request $request)
    {
        $user = auth()->user();
        $cart = $user->cart;

        $cart->cartProducts()->where('product_option_id', $request->product_id)->delete();

        return response()->json($cart->load('cartProducts', 'cartProducts.productOption', 'cartProducts.productOption.product'));
    }
}
