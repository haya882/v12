@php
    $items = auth()->check()
        ? \App\Models\Cart::with('product')
            ->where('user_id', auth()->id())
            ->get()
        : collect();
    $subtotal = $items->sum(function ($item) {
        return $item->price * $item->quantity;
    });
    $wishlistItems =  auth()->check()? auth()->user()->wishlist()->with('product')->get() : collect();
    $subtotalWishlist = $wishlistItems->sum(function ($item) {
            return $item->product->price;
        });
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ config('app.name') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ asset('web/css/style.css') }}?v={{ time() }}">

    <!--Render All Element Normally-->
    <link rel="stylesheet" href="{{ asset('web/CSS/normalize.css') }}" />
    <!-- Webfont library -->
    <link rel="stylesheet" href="{{ asset('web/CSS/all.min.css') }} " />
    <!-- Google font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Concert+One&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet" />
    <script src="https://kit.fontawesome.com/c1a12a9bed.js" crossorigin="anonymous"></script>
    <!-- Bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    @stack('styles')
</head>

<body>

    <!-- Start Header -->
    <header>
        <div class="container">

            <a href="{{ route('website.index') }}"><img class="image" src="{{ asset('web/images/logo2.png') }}"
                    alt="logo" /></a>
            <div class="menu-toggle">
                <i class="fa-solid fa-bars-staggered" id="open-btn"></i>
            </div>
            <div class="overlay" id="overlay"></div>
            <div class="sidebar" id="sidebar">
                <div class="quick-navigation">
                    <p><i class="icon" id="close-btn">&times;</i> Quick Navigation</p>
                </div>
                <div class="search-container2">
                    <input type="text" class="searchBox" placeholder="Search..." />
                    <i class="bi bi-search" id="searchBtn1"></i>
                </div>
                <div class="tab-buttons">
                    <button id="mobile-menu-btn" class="tab active">Mobile Menu</button>
                    <button id="categories-btn" class="tab">Categories</button>
                </div>
                <ul class="menu" id="mobile-menu">
                    <li>
                        <a href="#" class="active">Home</a>
                    </li>
                    <li>
                        <a href="products.html">Shop <span class="toggle" data-target="options">+</span></a>
                        <ul class="submenu" id="options">
                            <li>
                                <a href="#">
                                    <i class="fas fa-chevron-right icon"></i> Accessories
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-chevron-right icon"></i> Bracelets
                                    <span class="toggle" data-target="options1">+</span></a>
                                <ul class="submenu" id="options1">
                                    <li>
                                        <a href="#">
                                            <i class="fas fa-chevron-right icon"></i> Women's</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fas fa-chevron-right icon"></i> Jacket</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fas fa-chevron-right icon"></i> Blouses</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fas fa-chevron-right icon"></i> Dresses</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-chevron-right icon"></i> Clothing
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-chevron-right icon"></i>Coats & Jackets
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-chevron-right icon"></i> Clothing
                                    <span class="toggle" data-target="options2">+</span></a>
                                <ul class="submenu" id="options2">
                                    <li>
                                        <a href="#">
                                            <i class="fas fa-chevron-right icon"></i> Rings</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fas fa-chevron-right icon"></i> Shoes</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fas fa-chevron-right icon"></i> Watches</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-chevron-right icon"></i> Handing</a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-chevron-right icon"></i> Men's</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="view.html">Products
                            <span class="toggle" data-target="blog-options">+</span></a>
                        <ul class="submenu" id="blog-options">
                            <li>
                                <a href="#"><i class="fas fa-chevron-right icon"></i>Carousel</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-chevron-right icon"></i>Category 01
                                    <span class="toggle" data-target="options3">+</span></a>
                                <ul class="submenu" id="options3">
                                    <li>
                                        <a href="#">
                                            <i class="fas fa-chevron-right icon"></i> Sub Category
                                            01</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fas fa-chevron-right icon"></i> Sub Category
                                            01</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-chevron-right icon"></i> Category 02
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-chevron-right icon"></i> Category 03
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-chevron-right icon"></i> Parent Category
                                    |<span class="toggle" data-target="options4">+</span></a>
                                <ul class="submenu" id="options4">
                                    <li>
                                        <a href="#">
                                            <i class="fas fa-chevron-right icon"></i> Child Category
                                            |
                                            <span class="toggle" data-target="options5">+</span></a>
                                        <ul class="submenu" id="options5">
                                            <li>
                                                <a href="#">
                                                    <i class="fas fa-chevron-right icon"></i> Grandchild
                                                    Category |</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="fas fa-chevron-right icon"></i> Parent Category
                                    ||</a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-chevron-right icon"></i> Parent Category
                                    |||<span class="toggle" data-target="options6">+</span>
                                </a>
                                <ul class="submenu" id="options6">
                                    <li>
                                        <a href="#">
                                            <i class="fas fa-chevron-right icon"></i> Child Category
                                            |||</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="fas fa-chevron-right icon"></i>Un categorized
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">My Account
                            <span class="toggle" data-target="account-options">+</span></a>
                        <ul class="submenu" id="account-options">
                            <li>
                                <a href="cart.html"><i class="fas fa-chevron-right icon"></i> My Cart</a>
                            </li>
                            <li>
                                <a href="checkout.html"><i class="fas fa-chevron-right icon"></i> My Checkout</a>
                            </li>
                            <li>
                                <a href="wishlist.html"><i class="fas fa-chevron-right icon"></i> My Wishlist</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Social Link
                            <span class="toggle" data-target="options7">+</span></a>
                        <ul class="submenu" id="options7">
                            <li>
                                <a href="#"><i class="fas fa-chevron-right icon"></i> Facebook</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-chevron-right icon"></i> Twitter</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-chevron-right icon"></i> Google+</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Other Link
                            <span class="toggle" data-target="options8">+</span></a>
                        <ul class="submenu" id="options8">
                            <li>
                                <a href="#"><i class="fas fa-chevron-right icon"></i> Privacy Policy</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-chevron-right icon"></i> Support Policy</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-chevron-right icon"></i> Refund Policy</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-chevron-right icon"></i> Term of Use</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="menu" id="categories" style="display: none">
                    <li>
                        <a href="#">Bracelets<span class="toggle" data-target="options21">+</span></a>
                        <ul class="submenu" id="options21">
                            <li>
                                <a href="#"><i class="fas fa-chevron-right icon"></i> Women's</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-chevron-right icon"></i> Jacket</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-chevron-right icon"></i> Blouses</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-chevron-right icon"></i> Dresses</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Clothing</a>
                    </li>
                    <li>
                        <a href="#">Coat & Jackets</a>
                    </li>
                    <li>
                        <a href="#">Earring
                            <span class="toggle" data-target="options22">+</span></a>
                        <ul class="submenu" id="options22">
                            <li>
                                <a href="#"><i class="fas fa-chevron-right icon"></i> Rings</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-chevron-right icon"></i> Shoes</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-chevron-right icon"></i> Watches</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Handbag</a>
                    </li>
                    <li>
                        <a href="#">Men's</a>
                    </li>
                    <li>
                        <a href="#">Accessories</a>
                    </li>
                </ul>
                <div class="social-links">
                    <a href="https://x.com/Shatha72401840?t=0D6VaDRh-zZ1hF4LdM5J3w&s=35"target="_blank"><i
                            class="fab fa-twitter"></i></a>
                    <a href="https://www.facebook.com/share/161bfAfvt4/" target="_blank"><i
                            class="fab fa-facebook"></i></a>
                    <a href="https://myaccount.google.com/?hl=en&utm_source=OGB&utm_medium=act&gar=WzJd"
                        target="_blank"> <i class="fab fa-google"></i></a>
                </div>
            </div>

            <ul class="nav">
                <li><a href="{{ route('website.index') }}" class="active">Home</a></li>
                <li><a href="{{ route('website.view') }}">Products</a></li>
                <li class="dropdown">
                    <a href="{{ route('website.products.index') }}">Shop <i class="fas fa-chevron-down"></i></a>
                    <div class="mega-menu">
                        <ul class="column">
                            <h3>Shop Page</h3>
                            <li><a href="{{ route('website.details') }}">My details</a></li>
                            <li><a href="{{ route('website.cart.index') }}">My Cart</a></li>
                            <li><a href="{{ route('website.checkout') }}">My Checkout</a></li>
                            <li><a href="{{ route('website.wishlist.index') }}">My Wishlist</a></li>
                            <li><a href="https://github.com/Shatha492002" target="_blank">My Account in github</a>
                            </li>
                        </ul>
                        <ul class="column">
                            <h3>Product Types</h3>
                            <li><a href="details.html?id=Clot-W-003">Most used product</a></li>
                            <li><a href="details.html?id=Glass-M-007">More productive product</a></li>
                            <li><a href="details.html?id=Clot-M-037">More available product</a></li>
                            <li><a href="details.html?id=Clot-W-067">New product</a></li>
                            <li><a href="details.html?id=Acc-M-064">Most loved product</a></li>
                        </ul>
                        <div class="best-sellers">
                            <h3>Best Sellers</h3>
                            <div class="product">
                                <a href="details.html?id=Sho-W-002">
                                    <img src="{{ asset('web/images/shoes10.png') }}" alt="Plain brown shoes" />
                                </a>
                                <div class="info">
                                    <p>Plain brown shoes</p>
                                    <div class="stars">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <div class="price">$75.00</div>
                                </div>
                            </div>
                            <div class="product">
                                <a href="details.html?id=Sho-M-016">
                                    <img src="{{ asset('web/images/shoes5.png') }}" alt="comfortable shoes" />
                                </a>
                                <div class="info">
                                    <p>comfortable shoes</p>
                                    <div class="stars">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                    </div>
                                    <div class="price">$80.00</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li><a href="{{ route('website.about') }}">About</a></li>
                <li><a href="{{ route('website.contact') }}">Contact</a></li>
            </ul>
            <div class="icons">
                @auth
                    <div class="user-dropdown">
                        <a href="#" class="profile-link">
                            <i class="bi bi-person" id="profile-icon"></i>
                            <span class="username">{{ Auth::user()->name }}</span>
                        </a>
                        <div class="dropdown-content">
                            <a href="{{ route('website.wishlist.index') }}"><i class="bi bi-heart"></i> My Wishlist</a>
                            <form action="{{ route('customer.logout') }}" method="POST" class="logout-form">
                                @csrf
                                <button type="submit"><i class="bi bi-box-arrow-right"></i> Logout</button>
                            </form>
                        </div>
                    </div>
                @else
                    <a href="{{ route('customer.login') }}"><i class="bi bi-person" id="profile-icon"></i></a>
                @endauth


                @include('website.wishlist.wishlist-mnue')
                @include('website.carts.cart-mnue')


                <i class="bi bi-search" id="searchBtn"></i>
                <div class="search-container">
                    <div class="boxSearch" id="searchBox">
                        <input type="text" placeholder="Type your search..." />
                        <select>
                            <option value="Category">Select Category</option>
                            <option value="Bracelets">Bracelets</option>
                            <option value="clothing">clothing</option>
                            <option value="Coats & Jackets">Coats & Jackets</option>
                            <option value=" HandBag">HandBag</option>
                        </select>
                        <button id="closeBtn" class="closeBtn">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="contact">
                <a href="https://x.com/Shatha72401840?t=0D6VaDRh-zZ1hF4LdM5J3w&s=35" target="_blank"><i
                        class="fab fa-twitter"></i></a>
                <a href="https://www.facebook.com/share/161bfAfvt4/" target="_blank"><i
                        class="fab fa-facebook"></i></a>
                <a href="https://myaccount.google.com/?hl=en&utm_source=OGB&utm_medium=act&gar=WzJd" target="_blank">
                    <i class="fab fa-google"></i></a>
            </div>
        </div>
    </header>

    <!-- End Header -->
    <button id="top-btn"><i class="fa-solid fa-arrow-up"></i></button>
    <div class="scroll"></div>
    {{ $slot }}
    <!-- Start Footer -->
    <div class="footer" id="footer"data-aos="fade-up" data-aos-duration="2000">
        <div class="container">
            <div class="column">
                <h3>Contact Info</h3>
                <div class="content">
                    <i class="fa fa-map-marker-alt"></i>
                    <div class="details">
                        <h4>Address:</h4>
                        <p>palestine - gaza - alzaytoon</p>
                    </div>
                </div>
                <div class="content">
                    <i class="fa fa-phone"></i>
                    <div class="details">
                        <h4>Phone:</h4>
                        <p>+970595204795</p>
                    </div>
                </div>
                <div class="content">
                    <i class="fa fa-envelope-open"></i>
                    <div class="details">
                        <h4>Email:</h4>
                        <p>
                            <a href="mailto:shathadogh872@gmail.com">shathadogh872@gmail.com</a>
                        </p>
                    </div>
                </div>
                <div class="content">
                    <i class="fa fa-link"></i>
                    <div class="details">
                        <h4>Website:</h4>
                        <p><a href="http://127.0.0.1:5501/index.html"
                                target="_blank">http://127.0.0.1:5501/index.html</a></p>
                    </div>
                </div>
            </div>
            <div class="column">
                <h3 id="info">Information</h3>
                <ul class="information">
                    <li>
                        <i class="fa fa-chevron-right"></i>
                        <i class="fa fa-chevron-right"></i>
                        <a href="https://github.com/Shatha492002" target="_blank"> My Account</a>
                    </li>
                    <li>
                        <i class="fa fa-chevron-right"></i>
                        <i class="fa fa-chevron-right"></i>
                        <a href="wishlist.html" target="_blank"> My Wishlist</a>
                    </li>
                    <li>
                        <i class="fa fa-chevron-right"></i>
                        <i class="fa fa-chevron-right"></i>
                        <a href="products.html" target="_blank"> Shopping</a>
                    </li>
                    <li>
                        <i class="fa fa-chevron-right"></i>
                        <i class="fa fa-chevron-right" target="_blank"></i><a href="about.html"> About Us</a>
                    </li>
                    <li>
                        <i class="fa fa-chevron-right"></i>
                        <i class="fa fa-chevron-right"></i><a href="cart.html" target="_blank"> My Cart</a>
                    </li>
                    <li>
                        <i class="fa fa-chevron-right"></i>
                        <i class="fa fa-chevron-right"></i>
                        <a href="checkout.html" target="_blank"> My Checkout</a>
                    </li>
                </ul>
            </div>
            <div class="column">
                <h3 id="info">Follow Us</h3>
                <ul class="follow">
                    <li>
                        <i class="fa fa-chevron-right"></i>
                        <i class="fa fa-chevron-right"></i>
                        <a href="https://www.facebook.com/share/161bfAfvt4/" target="_blank"> Facebook</a>
                    </li>
                    <li>
                        <i class="fa fa-chevron-right"></i>
                        <i class="fa fa-chevron-right"></i>
                        <a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox" target="_blank"> Google+</a>
                    </li>
                    <li>
                        <i class="fa fa-chevron-right"></i>
                        <i class="fa fa-chevron-right"></i><a href="https://www.youtube.com/@shatham.d.7816"
                            target="_blank"> YouTube</a>
                    </li>
                    <li>
                        <i class="fa fa-chevron-right"></i>
                        <i class="fa fa-chevron-right"></i>
                        <a href="https://x.com/Shatha72401840?t=0D6VaDRh-zZ1hF4LdM5J3w&s=35"target="_blank">
                            Twitter</a>
                    </li>
                    <li>
                        <i class="fa fa-chevron-right"></i>
                        <i class="fa fa-chevron-right"></i>
                        <a href="https://www.instagram.com/sh_m_d49?igsh=MTVhZTN4eHE5YTk2aw=="
                            target="_blank">Instagram</a>
                    </li>
                    <li>
                        <i class="fa fa-chevron-right"></i>
                        <i class="fa fa-chevron-right"></i>
                        <a href="https://www.pinterest.com/shathadogh872/" target="_blank">Pinterest</a>
                    </li>
                </ul>
            </div>
            <div class="newsletter">
                <h3>Newsletter</h3>
                <p>
                    Be the first to know about the latest updates & exclusive promotions
                    from us . No spam, we guarantee!
                </p>
                <form action="#" class="email">
                    <input type="email" placeholder="Email address" required />
                    <button type="submit">
                        <img src="images/telegram.png" alt="telegram" />
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- End Footer -->
    <div class="copyright">
        <div class="container">
            <div class="details">
                <h5>
                    <strong>&copy;</strong> Copyright 2025 <a href="index.html">AnyWhere</a> -
                    All Rights Reserved - Powered by WooVina Theme.
                </h5>
            </div>
            <div class="details">
                <h5>
                    <a href="#">Privacy & Cookies</a> | <a href="#">FAQs</a> |
                    <a href="#">Accessibility</a>
                </h5>
            </div>
        </div>
    </div>
    <!-- ...................................................
    .........................popup......................
    ................................................... -->


    <script>
        const IS_LOGGED_IN = {{ auth()->check() ? 'true' : 'false' }};
        const APP_ROUTES = {
            cartAdd: "{{ route('website.cart.add') }}",
            login: "{{ route('customer.login') }}",
            cartRemove: "{{ route('website.cart.remove') }}",
            cartUpdate: "{{ route('website.cart.update') }}",
            wishlistAdd: "{{ route('website.wishlist.add') }}",
            wishlistRemove: "{{ route('website.wishlist.remove') }}",
        };
    </script>


    <script src="{{ asset('web/js/loading.js') }}"></script>

    <script src="{{ asset('web/js/main.js') }}" defer></script>

    <script src="{{ asset('web/js/shop-actions.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


    @stack('scripts')


</body>

</html>
