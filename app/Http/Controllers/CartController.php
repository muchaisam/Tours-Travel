<?php

namespace App\Http\Controllers;

use App\Cart;

class CartController extends Controller
{
    public function getCart()
    {
        return view('cart');
    }

    public function removeItem($id)
    {
        $cart = Cart::find($id);

        if ($cart) {
            $cart->delete();
        }

        // Check if cart is empty
        if (Cart::count() === 0) {
            return redirect('/')->with('message', 'Cart is now empty.');
        }

        return redirect()->back()->with('message', 'Item removed from cart successfully.');
    }

    public function clearCart()
    {
        Cart::truncate();

        return redirect('/')->with('message', 'Cart cleared successfully.');
    }
}
