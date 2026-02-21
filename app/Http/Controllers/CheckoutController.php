<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;

class CheckoutController extends Controller
{
    public function createForm(Request $request)
    {
        return view('checkout');
    }

    public function checkout(Request $request)
    {
        $validated = $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'email' => 'required|email|max:255',
        ]);

        // Store checkout information
        // For now, redirect back with success message
        // TODO: Implement full payment processing with Stripe

        session()->flash('success', 'Checkout information received successfully');

        return redirect()->back();
    }
}
