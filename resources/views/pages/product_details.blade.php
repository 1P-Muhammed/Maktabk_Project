@extends('layouts.layout')
@section('content')
<main>
    <!-- Product Page Section -->
    <section class="product-page">
        <div class="product-list">
            <div class="product-container">
                <!-- Main Product Image (Dynamic from Database) -->
                <img id="main-image" src="/{{ $product->image }}" alt="{{ $product->name }}" />

                <!-- Thumbnail Images (Static for Now) -->
                <div class="product-images">
                    @foreach($product->images as $image)
                        <img src="{{ asset($image->url) }}" alt="Product Image" />
                    @endforeach
                </div>
            </div>

            <!-- Product Details (Dynamic from Database) -->
            <div class="product-details-container">
                <div class="product-details">
                    <p>{{ $product->name }}</p> <!-- Product Name from DB -->

                    <!-- Pricing -->
                    <p class="price">
                        LE {{ $product->discount_price }}
                        <s>LE {{ $product->price }}</s>
                    </p>

                    <!-- Quantity Selector -->
                    <form action="{{ route('cart.add') }}" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <div class="quantity-container">
                            <i class="fa-solid fa-minus" onclick="adjustQuantity(-1)"></i>
                            <input type="number" id="quantity" name="quantity" value="1" min="1" class="quantity-input">
                            <i class="fa-solid fa-plus" onclick="adjustQuantity(1)"></i>
                        </div>
                        <br>
                        <button type="submit" class="button btn">Add to Cart</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Product Description (Dynamic from DB) -->
        <div class="product-full-details">
            {{ $product->description }}
        </div>

        <!-- Customer Reviews Section (Static Content) -->
        <div class="customer-reviews">
            <h2>Don't Just Take Our Word For It!</h2>
            <p>Hear from your returning customers!</p>
            <img src="/images/customer.png" alt="Customer Review" />
            <p>
                I bought a chair from Maktabk it was really amazing and high quality material
                <span>- MaZen</span>
            </p>
        </div>

        <!-- Promotional Section (Static Content) -->
        <div class="overview">
            <div><img src="/images/cat.png" alt="Promotional Icon" /></div>
            <div>
                <h2>Maktabk is The Best</h2>
                <p>Every chair purchase comes with a free 6-month warranty</p>
            </div>
        </div>
    </section>
</main>
@endsection
