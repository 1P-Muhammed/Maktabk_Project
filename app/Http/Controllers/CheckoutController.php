<?php

namespace App\Http\Controllers;

use App\Mail\OrderMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CheckoutController extends Controller
{
    public function sendEmail(Request $request)
    {
        $request->validate([
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'postal' => 'nullable|string|max:20',
        ]);

        $cart = session()->get('cart', []);
        if (empty($cart)) {
            return redirect()->back()->with('error', 'Your cart is empty.');
        }

        try {
            $orderData = array_merge($request->all(), ['cart' => $cart]);
            Mail::to(config('mail.from.address'))->send(new OrderMail($orderData));
            
            session()->forget('cart');
            return redirect()->route('cart')->with('success', 'Your order has been placed successfully!');
        } catch (\Exception $e) {
            \Log::error('Order email failed: ' . $e->getMessage());
            return redirect()->back()->with('error', 'There was an error processing your order. Please try again.');
        }
    }
}
