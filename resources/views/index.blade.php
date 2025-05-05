@extends('layouts.layout')
@section('content')
    </header>
    <main>
        <!-- /* Hero Section Start */ -->
        <section class="hero">
            <video autoplay muted loop id="hero-video">
                <source src="images/hero-bg.mp4" type="video/mp4" />
                Your browser does not support the video tag.
            </video>
            <div>
                <h1>Find Your</h1>
                <p>Best Chair</p>
                <a class="button" href="{{ route('catalog') }}">
                    Shop Now تسوق الأن
                </a>
            </div>
        </section>
        <!-- /* Hero Section End */ -->
        <!-- /* Categories Section Start */ -->
        <section class="preview">
            <div class="preview-title">
                <h2>Welcome to MakTaBk</h2>
                <p>Our focus is to help you and strive for your comfort.</p>
            </div>
            <div class="product-list">
                <div class="product-container">
                    <div class="main-image">
                        <img id="main-image" src="images/product/1.png" alt="Chair 1" />
                    </div>
                    <div class="product-images">
                        <img src="images/product/1.png" alt="Chair 1" />
                        <img src="images/product/2.png" alt="Chair 1" />
                        <img src="images/product/3.png" alt="Chair 1" />
                    </div>
                </div>
                <div class="product-details-container">
                    <div class="product-details">
                        <p>
                            كرسي مكتب أسود شبكي ، مريح مع مسند للرأس متحرك و ذراع مبطن مع
                            قاعدة معدن مستوردة
                        </p>
                        <p class="price">LE 1,599.00 <s>LE 2,000.00</s></p>
                        <a class="button" href="{{ route('product_details') }}" class="btn">
                            <i class="fa-solid fa-cart-plus"></i> Add to Cart
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- /* Categories Section End */ -->
        <div class="feature-image">
            <img src="images/home.png" alt="Features" />
            <div>
    </main>
@endsection
