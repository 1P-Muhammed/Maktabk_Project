@extends('layouts.layout')
@section('content')
    <main>
        <section class="catalog-section">
            <h1 class="catalog-title">Products</h1>
            <div class="catalog-items">
                <!-- item -->
                <div class="catalog-item">
                    <div class="catalog-img-container">
                        <img src="../images/product/1.png" alt="Product 1" />
                        <p class="catalog-img-save">
                            <i class="fa-solid fa-tag"></i> Save LE 451.00
                        </p>
                    </div>
                    <div class="catalog-item-info">
                        <h2>كرسي اسود طبي مع ذراع ثابت</h2>
                        <div class="catalog-price-container">
                            <p>LE 1,599.00</p>
                            <p class="price">LE 2,000.00</p>
                        </div>
                        <button>Buy</button>
                    </div>
                </div>
                <!-- item end -->
            </div>
        </section>
@endsection
