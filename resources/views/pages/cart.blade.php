@extends('layouts.layout')
@section('content')
<link rel="stylesheet" href="{{ asset('css/cart.css') }}" />

<main class="checkout">
    <!-- Billing Form -->
    <section class="card billing">
        <h2>Payment</h2>
        <p class="secure">🔒 All transactions are secure and encrypted.</p>
        <h3>Cash on Delivery (COD)</h3>
        <form id="checkout-form" novalidate method="POST" action="{{ route('send.checkout.email') }}">
            @csrf
            <fieldset>
                <legend>Billing address</legend>
                <label for=" country">Country</label>
                <select id="country" name="country" required>
                    <option>Egypt</option>
                </select>
                <label for="first-name">First name</label>
                <input id="first-name" name="firstName" type="text" required />
                <label for="last-name">Last name</label>
                <input id="last-name" name="lastName" type="text" required />
                <label for="address">Address</label>
                <input id="address" name="address" type="text" required />
                <label for="city">City</label>
                <input id="city" name="city" type="text" value="6th of October" required />
                <label for="postal">Postal code <span>(optional)</span></label>
                <input id="postal" name="postal" type="text" />
                <label for="phone">Phone</label>
                <input id="phone" name="phone" type="tel" pattern="^\\+?\\d{7,15}$" required />
            </fieldset>
            <button class="button" id="submit-order" type="submit">Submit Order</button>
        </form>
    </section>

    <!-- Order Summary -->
    <section class="card summary">
        <h2>Order summary</h2>
        <div class="cart-header">
            <span>Product</span><span>Description</span><span>Qty</span><span>Price</span><span>Remove</span>
        </div>
        <ul id="cart-items" class="cart-items">
            @php $total = 0; @endphp
            @forelse(session('cart', []) as $id => $details)
            @php
            $price = (float) str_replace(',', '', $details['price']);
            $quantity = (int) $details['quantity'];
            $lineTotal = $price * $quantity;
            $total += $lineTotal;
            @endphp
            <li data-id="{{ $id }}">
                <img src="/{{ $details['image'] }}" alt="{{ $details['name'] }}" width="80" />
                <span>{{ $details['name'] }}</span>
                <div class="quantity-control">
                    <form action="{{ route('cart.update') }}" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $id }}">
                        <input type="number" name="quantity" value="{{ $quantity }}" min="1" class="quantity-input" onchange="this.form.submit()">
                    </form>

                </div>
                <span class="line-total">E£{{ number_format($lineTotal, 0, '.', ',') }}</span>
                <!-- Delete button -->
                <form action="{{ route('cart.remove') }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="product_id" value="{{ $id }}">
                    <button type="submit">×</button>
                </form>
            </li>
            @empty
            <li>Your cart is empty.</li>
            @endforelse

        </ul>

        <div class="cost-summary">
            <div><strong>Total (EGP)</strong></div>
            <div id="total-value" aria-live="polite">E£{{ number_format($total, 0, '.', ',') }}</div>
        </div>
    </section>
</main>
@endsection
