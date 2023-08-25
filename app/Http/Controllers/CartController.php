<?php

namespace App\Http\Controllers;

use App\Actions\AddProductToCartAction;
use App\Actions\RemoveProductFromCartAction;
use Illuminate\Http\Request;

class CartController
{
    public function __construct(
        private readonly AddProductToCartAction $addProductToCart,
        private readonly RemoveProductFromCartAction $removeProductFromCart,
    ) {
    }

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
        $this->addProductToCart->execute($request->ref_nr, $request->amount);

        return response()->json([
            'message' => 'Product added to cart.'
        ]);
    }

    public function removeProduct(Request $request)
    {
        $this->removeProductFromCart->execute($request->ref_nr);

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

    public function updateAmount(Request $request) {
        $user = auth()->user();
        $cart = $user->cart;

        $cart->cartProducts()->where('product_option_id', $request->product_id)->update(['amount' => request()->amount]);

        return response()->json([
            'message' => 'Product amount updated.'
        ]);
    }
}
