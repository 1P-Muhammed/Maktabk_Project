@extends('layouts.layout')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}" />

    <main class="checkout">
        <!-- Billing Form -->
        <section class="card billing">
            <h2>Payment</h2>
            <p class="secure">🔒 All transactions are secure and encrypted.</p>
            <h3>Cash on Delivery (COD)</h3>
            <form id="checkout-form" novalidate>
                <fieldset>
                    <legend>Billing address</legend>
                    <label for="country">Country</label>
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
                <button id="submit-order" type="submit" disabled>Submit Order</button>
            </form>
        </section>

        <!-- Order Summary -->
        <section class="card summary">
            <h2>Order summary</h2>
            <div class="cart-header">
                <span>Product</span><span>Description</span><span>Qty</span><span>Price</span>
            </div>
            <ul id="cart-items" class="cart-items">
                <ul id="cart-items">
                    <li>
                        <img src="images/product/1.png" alt="كرسى حوض جلد انتظار" width="80" />
                        <span>كرسى حوض جلد انتظار</span>
                        <div class="quantity-control" data-id="1">
                            <input type="number" min="1" value="1" />
                        </div>
                        <span class="line-total">E£2,799.00</span>
                    </li>
                    <li>
                        <img src="images/product/2.png" alt="منتج آخر" width="80" />
                        <span>منتج آخر</span>
                        <div class="quantity-control" data-id="2">
                            <input type="number" min="1" value="2" />
                        </div>
                        <span class="line-total">E£301.00</span>
                    </li>
                </ul>

            </ul>
            <div class="cost-summary">
                <div><strong>Total (EGP)</strong></div>
                <div id="total-value" aria-live="polite">E£0.00</div>
            </div>
        </section>
    </main>
@endsection
