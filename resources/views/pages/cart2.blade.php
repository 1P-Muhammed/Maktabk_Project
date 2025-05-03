@extends('layouts.layout')
@section('content')
    <main>
        <section class="cart">
            <h1>Your cart</h1>
            <div class="cart-container">
                <div class="cart-item-container">
                    <div class="cart-item">
                        <img src="/images/product/1.png" alt="Product 1" />
                        <div class="cart-item-details">
                            <div class="cart-item-contant">
                                <p>
                                    Product NameProduct NameProduct NameProduct NameProduct
                                    NameProduct NameProduct NameProduct NameProduct Name
                                </p>
                                <a><i class="fa-solid fa-trash"></i></a>
                            </div>
                            <div class="cart-item-contant">
                                <div class="quantity-container">
                                    <i class="fa-solid fa-minus"></i>
                                    <p>0</p>
                                    <i class="fa-solid fa-plus"></i>
                                </div>
                                <div class="price-container">
                                    <p class="price">LE 1,599.00</p>
                                    <p>LE 2,000.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cart-note-container">
                        <p>
                            <i class="fa-solid fa-circle-info"></i> Special instructions for
                            seller
                        </p>
                        <textarea></textarea>
                    </div>
                </div>
                <div class="checkout-container">
                    <div class="checkout-item">
                        <div>
                            <div class="checkout-sub-container">
                                <p>Subtotal</p>
                                <p>LE 5,098.00</p>
                            </div>
                            <div class="checkout-sub-container make-red">
                                <p>Total savings</p>
                                <p>LE 1,102.00</p>
                            </div>
                        </div>

                        <p class="tax-text">Taxes and shipping calculated at checkout</p>
                        <a class="checkout-button"><i class="fa-solid fa-money-bill"></i> Checkout - LE 5,098.00</a>
                    </div>
                </div>
            </div>
            <div class="cart-empty-container">
                <p>Your cart is currently empty.</p>
                <a class="continue-shopping-button" href="catalog.html">Continue browsing</a>
            </div>
        </section>
    @endsection
