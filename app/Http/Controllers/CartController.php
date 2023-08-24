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

        return response()->json([
            'cart' => $cart ? $cart->load('cartProducts', 'cartProducts.productOption', 'cartProducts.productOption.product') : null,
            'discount' => $user->discounts->first()
        ]);
    }

    public function addProduct(Request $request)
    {
        $user = auth()->user();
        $cart = $user->cart;

        if(!$cart) {
            $cart = $user->cart()->create();
        }

        $cart->cartProducts()->updateOrCreate(['product_option_id' => $request->product_id], ['amount' => request()->amount]);

        return response()->json([
            'message' => 'Product added to cart.'
        ]);
    }

    public function removeProduct(Request $request)
    {
        $user = auth()->user();
        $cart = $user->cart;

        $cart->cartProducts()->where('product_option_id', $request->product_id)->delete();

        return response()->json([
            'message' => 'Product Removed from cart.'
        ]);
    }

    public function destroy(Request $request)
    {
        $user = auth()->user();
        $cart = $user->cart;

        $cart->delete();

        return response()->json([
            'message' => 'Cart deleted.'
        ]);
    }
}
