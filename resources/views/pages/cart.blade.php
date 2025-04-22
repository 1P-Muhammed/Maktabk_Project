<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href={{ asset('css/general.css') }} />
    <link rel="stylesheet" href={{ asset('css/style.css') }} />
    <link rel="stylesheet" href={{ asset('css/pages.css') }} />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
    <title>maktabk</title>
</head>

<body>
    <header>
        <nav>
            <i id="menu" class="fa-solid fa-bars"></i>
            <img src="../images/logo.png" alt="Logo" class="logo" />
            <div class="nav-links">
                <a class="profile" href="pages/login_signup.html">
                    <i class="fa-solid fa-user"></i>
                    <div class="dropdown-content">
                        <a><i class="fa-solid fa-right-to-bracket"></i> Login</a>
                        <br />
                        <a><i class="fa-solid fa-user-plus"></i> Create Account</a>
                    </div>
                </a>
                <a href="pages/cart.html"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
        </nav>
        <!-- /* sidebar Section Start */ -->
        <section class="sidebar">
            <div class="sidebar-header">
                <p class="sidebar-menu-icon">
                    <i id="menu" class="fa-solid fa-bars"></i> Menu
                </p>
                <i id="close" class="fa-solid fa-xmark"></i>
            </div>
            <div class="sidebar-container">
                <div class="sidebar-links">
                    <a href="../index.html" class="menu-links">Home</a><a href="#" class="menu-links">Catalog</a><a
                        href="contact.html" class="menu-links">Contact</a>
                </div>

                <div class="menu-buttons-container">
                    <button class="menu-buttons login-button">
                        <i class="fa-solid fa-right-to-bracket"></i> Login</button><button
                        class="menu-buttons create-account-button">
                        <i class="fa-solid fa-user-plus"></i>
                        Create Account
                    </button>
                </div>

                <div class="sidebar-contact">
                    <a href="mailto:rahhacraft@gmail.com"><i class="fa-solid fa-envelope"></i> rahhacraft@gmail.com</a>
                    <a href="tel:01098611085"><i class="fa-solid fa-phone"></i> 01098611085</a>
                </div>

                <ul>
                    <li><a href="search.html">Search</a></li>
                    <li><a href="refund_policy.html">Refund Policy</a></li>
                    <li><a href="privacy_policy.html">Privacy Policy</a></li>
                    <li><a href="term_of_service.html">Terms of Service</a></li>
                </ul>
            </div>
        </section>
        <!-- /* /* sidebar Section End */ -->
    </header>
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
            <div class="cart-empty-container">
                <p>Your cart is currently empty.</p>
                <a class="continue-shopping-button" href="catalog.html">Continue browsing</a>
            </div>
        </section>
        <!-- /* Features Section Start */ -->
        <section class="features">
            <div class="feature-list">
                <div class="feature-item">
                    <i class="fa-solid fa-thumbs-up"></i>
                    <h3>Hassle-Free Returns</h3>
                </div>
                <div class="feature-item">
                    <i class="fa-solid fa-calendar-days"></i>
                    <h3>6 Months Warranty</h3>
                </div>
                <div class="feature-item">
                    <i class="fa-solid fa-check"></i>
                    <h3>100% Satisfaction Guaranteed</h3>
                </div>
                <div class="feature-item">
                    <i class="fa-solid fa-headset"></i>
                    <h3>Customer Service</h3>
                </div>
            </div>
        </section>
        <!-- /* Features Section End */ -->
    </main>
    <footer>
        <div class="footer-width">
            <div class="footer-container">
                <div class="footer-about">
                    <h3>About Us</h3>
                    <p class="about-text">
                        MakTaBk is designed to take away your aches, pains and improve
                        your overall body comfort, getting you feeling your best!
                    </p>
                    <p>
                        Email:
                        <a href="mailto:rahhacraft@gmail.com">rahhacraft@gmail.com</a>
                    </p>
                    <p>Phone: <a href="tel:01098611085">01098611085</a></p>
                </div>
                <div class="footer-links">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="#">Search</a></li>
                        <li><a href="#">Refund Policy</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>
            </div>
            <p class="copy-right">&copy; Copyright © 2025 <a>Maktabk</a></p>
        </div>
    </footer>
</body>
<script src="{{ asset('js/script.js') }}"></script>

</html>
