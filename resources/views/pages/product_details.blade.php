@extends('layouts.layout')
@section('content')
    <main>
        <!-- /* Categories Section Start */ -->
        <section class="product-page">
            <div class="product-list">
                <div class="product-container">
                    <img id="main-image" src="../images/product/1.png" alt="Chair 1" />
                    <div class="product-images">
                        <img src="../images/product/1.png" alt="Chair 1" />
                        <img src="../images/product/2.png" alt="Chair 1" />
                        <img src="../images/product/3.png" alt="Chair 1" />
                    </div>
                </div>
                <div class="product-details-container">
                    <div class="product-details">
                        <p>كرسي أســـــــود طبى مع ذراع ثابت</p>
                        <p class="price">LE 1,599.00 <s>LE 2,000.00</s></p>
                        <p class="Quantity-p">Quantity</p>
                        <div class="quantity-container">
                            <i class="fa-solid fa-minus"></i>
                            <p>0</p>
                            <i class="fa-solid fa-plus"></i>
                        </div>
                        <a href="{{ route('cart2') }}" class="button" class="btn">
                            <i class="fa-solid fa-cart-plus"></i> Add to Cart
                        </a>
                    </div>
                </div>
            </div>
            <div>
                <div class="product-full-details">
                    كرسى مدير جلد ظهر عالى يدات ستانلس ماكينة طيارة نجمة استانلس متاح

                    بأكثر من لون مزودة بمكينة للتحكم فى ارتفاع الكرسى عن الارض مزودة

                    بمسند رأس متحرك مع دوران ثلث 360 درجة
                </div>
                <div class="customer-reviews">
                    <h2>Don't Just Take Our Word For It!</h2>
                    Hear from your returning customers!
                    <img src="images/customer.png" alt="Customer" />
                    I bought a chair from Maktabk it was realy amazing and was realy
                    High quality material
                    <span>- MaZen</span>
                </div>
                <div class="overview">
                    <div><img src="images/cat.png" /></div>
                    <div>
                        <h2>Maktabk is The Best</h2>
                        <p>
                            Every chair Maktabk purchase comes with a free 6 Months warranty
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- /* Categories Section End */ -->
    </main>
@endsection
