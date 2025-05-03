@extends('layouts.layout')
@section('content')
    <main>
        <section class="search-section">
            <div class="search-container">
                <h1 class="search-title">Search</h1>
                <form action="/search" method="get" class="search-form">
                    <input type="search" name="q" class="search-input" placeholder="Search products..."
                        aria-label="Search products" />
                    <button type="submit" class="search-button">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>
            </div>
        </section>
        <!--/* Search Section End */ -->
        <!-- /* Search Results Section Start */ -->
        <section class="catalog-section search-visibility">
            <p>Nothing found for your search.</p>
            <h1 class="catalog-title">Products</h1>
            <div class="catalog-items">
                <!-- item -->
                <div class="catalog-item">
                    <div class="catalog-img-container">
                        <img src="../images/product/1.png" alt="Product 1" />
                        <p class="catalog-icon-save">
                            <i class="fa-solid fa-tag"></i> Save LE 451.00
                        </p>
                    </div>
                    <div class="catalog-item-info">
                        <h2>كرسي اسود طبي مع ذراع ثابت</h2>
                        <div class="catalog-price-container">
                            <p>LE 1,599.00</p>
                            <p class="price">LE 2,000.00</p>
                        </div>
                        <button>Add to Cart</button>
                    </div>
                </div>
                <!-- item end -->
            </div>
        </section>
        <!-- /* Search Results Section end */ -->
    </main>
@endsection
