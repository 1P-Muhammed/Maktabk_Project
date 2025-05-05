<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/general.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/pages.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
    <title>maktabk</title>
</head>

<body>
    <header>
        <nav>
            <i id="menu" class="fa-solid fa-bars"></i>
            <a class="logo-link" href="{{ route('home') }}"><img src="images/logo.png" alt="Logo"
                    class="logo" /></a>
            <div class="nav-links">
                <a class="profile" href="#">
                    <i class="fa-solid fa-user"></i>
                    <div class="dropdown-content">
                        @auth
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit"><i class="fa-solid fa-right-from-bracket"></i> Logout</button>
                            </form>
                        @else
                            <a href="{{ route('register') }}"><i class="fa-solid fa-right-to-bracket"></i> Login</a>
                        @endauth
                    </div>
                </a>
                <a class="cart-icon" href="{{ route('cart') }}"><i class="fa-solid fa-cart-shopping"></i></a>
                <P class="cart-quantity-counter">{{ '0' }}</P>
            </div>
        </nav>
        <!-- /* sidebar Section Start */ -->
        <div id="overlay"></div>
        <section class="sidebar">
            <div class="sidebar-header">
                <p class="sidebar-menu-icon">
                    <i id="menu" class="fa-solid fa-bars"></i> Menu
                </p>
                <i id="close" class="fa-solid fa-xmark"></i>
            </div>
            <div class="sidebar-container">
                <div class="sidebar-links">
                    <a href="{{ route('home') }}" class="menu-links">Home</a>
                    <a href="{{ route('catalog') }}" class="menu-links">Catalog</a>
                    <a href="{{ route('contact') }}" class="menu-links">Contact</a>
                </div>

                <div class="menu-buttons-container">
                    @auth
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit"><i class="fa-solid fa-right-from-bracket"></i> Logout</button>
                        </form>
                        @else
                                <a href="{{ route('register') }}"><i class="fa-solid fa-right-to-bracket"></i> Login</a>
                        @endauth
                </div>

                <div class="sidebar-contact">
                    <a href="mailto:rahhacraft@gmail.com"><i class="fa-solid fa-envelope"></i> rahhacraft@gmail.com</a>
                    <a href="tel:01098611085"><i class="fa-solid fa-phone"></i> 01098611085</a>
                </div>

                <ul>
                    <li><a href="{{ route('search') }}">Search</a></li>
                    <li><a href="{{ route('refund_policy') }}">Refund Policy</a></li>
                    <li><a href="{{ route('privacy_policy') }}">Privacy Policy</a></li>
                    <li><a href="{{ route('terms_of_service') }}">Terms of Service</a></li>
                </ul>
            </div>
        </section>
        <!-- /* /* sidebar Section End */ -->
    </header>
    @yield('content')
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
                        <li><a href="{{ route('search') }}">Search</a></li>
                        <li><a href="{{ route('refund_policy') }}">Refund Policy</a></li>
                        <li><a href="{{ route('privacy_policy') }}">Privacy Policy</a></li>
                        <li><a href="{{ route('terms_of_service') }}">Terms of Service</a></li>
                    </ul>
                </div>
            </div>
            <p class="copy-right">&copy; Copyright © 2025 <a>Maktabk</a></p>
        </div>
    </footer>
</body>
<script src="{{ asset('js/script.js') }}"></script>


</html>
