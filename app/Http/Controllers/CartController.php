<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catalog;
use App\Mail\OrderMail;
use Illuminate\Support\Facades\Mail;

class CartController extends Controller
{
    public function updateCart(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:catalogs,id',
            'quantity' => 'required|numeric|min:1',
        ]);

        $cart = session()->get('cart', []);

        if (isset($cart[$request->product_id])) {
            $cart[$request->product_id]['quantity'] = $request->quantity;
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Cart updated successfully');
        }

        return redirect()->back()->with('error', 'Item not found in cart');
    }


    public function addToCart(Request $request)
    {
        $product = Catalog::findOrFail($request->product_id);

        $cart = session()->get('cart', []);

        // If product already in cart, increase quantity
        if (isset($cart[$product->id])) {
            $cart[$product->id]['quantity'] += $request->quantity;
        } else {
            // Add new product to cart
            $cart[$product->id] = [
                "name" => $product['name'],
                "quantity" => $request->quantity,
                "price" => $product['discount_price'],
                "image" => $product->image
            ];
        }

        session()->put('cart', $cart);
        return redirect()->route('catalog')->with('success', 'Item removed successfully');
    }

    public function cart()
    {
        $cart = session()->get('cart', []);
        $cartQuantity = count($cart); // Count distinct items

        return view('pages.cart', compact('cartQuantity'));
    }


    public function removeFromCart(Request $request)
    {
        if ($request->product_id) {
            $cart = session()->get('cart', []);
            if (isset($cart[$request->product_id])) {
                unset($cart[$request->product_id]);
                session()->put('cart', $cart);
                return redirect()->back()->with('success', 'Item removed successfully');
            }
            return redirect()->back()->with('success', 'Item removed successfully');
        }
        return redirect()->back()->with('error', 'Item not found');
    }

    public function checkout(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
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
            return redirect()->route('cart.index')->with('success', 'Your order has been placed successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'There was an error processing your order. Please try again.');
        }
    }
}
