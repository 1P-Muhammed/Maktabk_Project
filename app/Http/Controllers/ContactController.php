<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact()
    {
        $cart = session()->get('cart', []);
        $cartQuantity = count($cart);
        return view("pages.contact", compact('cartQuantity'));
    }

    public function send(Request $request)
    {
        // Validate the input
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'phone'   => 'nullable|string|max:20',
            'message' => 'required|string',
        ]);

        try {
            // Get cart data
            $cart = session()->get('cart', []);
            
            // Create the mailable instance with validated data and cart
            $emailData = new ContactMail([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'phone' => $validated['phone'],
                'message' => $validated['message'],
                'cart' => $cart
            ]);

            // Send the email using the ContactMail mailable
            Mail::to('misssfe3@gmail.com')->send($emailData);

            return back()->with('success', 'Message sent successfully!');
        } catch (\Exception $e) {
            \Log::error('Email sending failed: ' . $e->getMessage());
            return back()->with('error', 'Failed to send message: ' . $e->getMessage());
        }
    }
}
