@extends('layouts.layout')
@section('content')

    <main>
        <section class="catalog-section">
            <h1 class="catalog-title">Products</h1>
            <div class="catalog-items">
                <!-- item -->
                @foreach ($catalogs as $catalog )

                <div class="catalog-item">
                    <div class="catalog-img-container">
                        {{-- @foreach ($images as $image) --}}
                            {{-- @dd($image) --}}
                            <img src="{{ $catalog->images }}" alt="Product 1" />
                        {{-- @endforeach --}}
                        <p class="catalog-img-save">
                            <i class="fa-solid fa-tag"></i> Save LE 451.00
                        </p>
                    </div>
                    <div class="catalog-item-info">
                        <h2> {{ $catalog->name }} </h2>
                        <div class="catalog-price-container">
                            <p>LE {{ $catalog->discount_price }}</p>
                            <p class="price">LE {{ $catalog->price }}</p>
                        </div>
                        <button>Buy</button>
                    </div>
                </div>
                @endforeach
                <!-- item end -->
            </div>
        </section>
@endsection
