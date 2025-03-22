<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('web/css/style.css') }}?v={{ time() }}">

    <!--Render All Element Normally-->
    <link rel="stylesheet" href="{{asset('web/CSS/normalize.css')}}" />
    <!-- Webfont library -->
    <link rel="stylesheet" href="{{asset('web/CSS/all.min.css') }} " />
   <!-- Google font link -->
   <link rel="preconnect" href="https://fonts.googleapis.com" />

   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
   <link
     href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Concert+One&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap"
     rel="stylesheet"
   />
   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
   <script
     src="https://kit.fontawesome.com/c1a12a9bed.js"
     crossorigin="anonymous"
   ></script>
   <!-- Bootstrap link -->
   <link
     href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css"
     rel="stylesheet"
   />
   <script src="{{ asset('web/js/loading.js') }}" defer></script>

  </head>
  <body>
    <!-- Start Header -->
    <header >
      <div class="container">
        <img class="image" src="{{ asset('web/images/logo2.png') }}" alt="logo"/> ></a>
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
              <a href="#">Home</a>



            </li>
            <li>
              <a href="#category"
                >Shop <span class="toggle" data-target="options">+</span></a
              >
              <ul class="submenu" id="options">
                <li>
                  <a href="#">
                    <i class="fas fa-chevron-right icon"></i> Accessories
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fas fa-chevron-right icon"></i> Bracelets
                    <span class="toggle" data-target="options1">+</span></a
                  >
                  <ul class="submenu" id="options1">
                    <li>
                      <a href="#">
                        <i class="fas fa-chevron-right icon"></i> Women </a
                      >
                    </li>
                    <li>
                      <a href="#">
                        <i class="fas fa-chevron-right icon"></i> Jacket</a
                      >
                    </li>
                    <li>
                      <a href="#">
                        <i class="fas fa-chevron-right icon"></i> Blouses</a
                      >
                    </li>
                    <li>
                      <a href="#">
                        <i class="fas fa-chevron-right icon"></i> Dresses</a
                      >
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
                    <span class="toggle" data-target="options2">+</span></a
                  >
                  <ul class="submenu" id="options2">
                    <li>
                      <a href="#">
                        <i class="fas fa-chevron-right icon"></i> Rings</a
                      >
                    </li>
                    <li>
                      <a href="#">
                        <i class="fas fa-chevron-right icon"></i> Shoes</a
                      >
                    </li>
                    <li>
                      <a href="#">
                        <i class="fas fa-chevron-right icon"></i> Watches</a
                      >
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="#">
                    <i class="fas fa-chevron-right icon"></i> Handing</a
                  >
                </li>
                <li>
                  <a href="#">
                    <i class="fas fa-chevron-right icon"></i> Men</a
                  >
                </li>
              </ul>
            </li>
            <li>
              <a href="#product"
                >Products
                <span class="toggle" data-target="blog-options">+</span></a
              >
              <ul class="submenu" id="blog-options">
                <li>
                  <a href="#"
                    ><i class="fas fa-chevron-right icon"></i>Carousel</a
                  >
                </li>
                <li>
                  <a href="#"
                    ><i class="fas fa-chevron-right icon"></i>Category 01
                    <span class="toggle" data-target="options3">+</span></a
                  >
                  <ul class="submenu" id="options3">
                    <li>
                      <a href="#">
                        <i class="fas fa-chevron-right icon"></i> Sub Category
                        01</a
                      >
                    </li>
                    <li>
                      <a href="#">
                        <i class="fas fa-chevron-right icon"></i> Sub Category
                        01</a
                      >
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
                    |<span class="toggle" data-target="options4">+</span></a
                  >
                  <ul class="submenu" id="options4">
                    <li>
                      <a href="#">
                        <i class="fas fa-chevron-right icon"></i> Child Category
                        |
                        <span class="toggle" data-target="options5">+</span></a
                      >
                      <ul class="submenu" id="options5">
                        <li>
                          <a href="#">
                            <i class="fas fa-chevron-right icon"></i> Grandchild
                            Category |</a
                          >
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>

                <li>
                  <a href="#">
                    <i class="fas fa-chevron-right icon"></i> Parent Category
                    ||</a
                  >
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
                        |||</a
                      >
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
              <a href="#">Contact</a>
            </li>
            <li>
              <a  href="#">About</a>
            </li>
            <li>
              <a href="#"
                >My Account
                <span class="toggle" data-target="account-options">+</span></a
              >
              <ul class="submenu" id="account-options">
                <li>
                  <a href="#"
                    ><i class="fas fa-chevron-right icon"></i> My Cart</a
                  >
                </li>
                <li>
                  <a href="#"
                    ><i class="fas fa-chevron-right icon"></i> My Checkout</a
                  >
                </li>
                <li>
                  <a href="#"
                    ><i class="fas fa-chevron-right icon"></i> My Wishlist</a
                  >
                </li>
              </ul>
            </li>
            <li>
              <a href="#"
                >Social Link
                <span class="toggle" data-target="options7">+</span></a
              >
              <ul class="submenu" id="options7">
                <li>
                  <a href="#"
                    ><i class="fas fa-chevron-right icon"></i> Facebook</a
                  >
                </li>
                <li>
                  <a href="#"
                    ><i class="fas fa-chevron-right icon"></i> Twitter</a
                  >
                </li>
                <li>
                  <a href="#"
                    ><i class="fas fa-chevron-right icon"></i> Google+</a
                  >
                </li>
              </ul>
            </li>
            <li>
              <a href="#"
                >Other Link
                <span class="toggle" data-target="options8">+</span></a
              >
              <ul class="submenu" id="options8">
                <li>
                  <a href="#"
                    ><i class="fas fa-chevron-right icon"></i> Privacy Policy</a
                  >
                </li>
                <li>
                  <a href="#"
                    ><i class="fas fa-chevron-right icon"></i> Support Policy</a
                  >
                </li>
                <li>
                  <a href="#"
                    ><i class="fas fa-chevron-right icon"></i> Refund Policy</a
                  >
                </li>
                <li>
                  <a href="#"
                    ><i class="fas fa-chevron-right icon"></i> Term of Use</a
                  >
                </li>
              </ul>
            </li>
          </ul>
          <ul class="menu" id="categories" style="display: none">
            <li>
              <a href="#"
                >Bracelets<span class="toggle" data-target="options21"
                  >+</span
                ></a
              >
              <ul class="submenu" id="options21">
                <li>
                  <a href="#"
                    ><i class="fas fa-chevron-right icon"></i> Women</a
                  >
                </li>
                <li>
                  <a href="#"
                    ><i class="fas fa-chevron-right icon"></i> Jacket</a
                  >
                </li>
                <li>
                  <a href="#"
                    ><i class="fas fa-chevron-right icon"></i> Blouses</a
                  >
                </li>
                <li>
                  <a href="#"
                    ><i class="fas fa-chevron-right icon"></i> Dresses</a
                  >
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
              <a href="#"
                >Earring
                <span class="toggle" data-target="options22">+</span></a
              >
              <ul class="submenu" id="options22">
                <li>
                  <a href="#"
                    ><i class="fas fa-chevron-right icon"></i> Rings</a
                  >
                </li>
                <li>
                  <a href="#"
                    ><i class="fas fa-chevron-right icon"></i> Shoes</a
                  >
                </li>
                <li>
                  <a href="#"
                    ><i class="fas fa-chevron-right icon"></i> Watches</a
                  >
                </li>
              </ul>
            </li>
            <li>
              <a href="#">Handbag</a>
            </li>
            <li>
              <a href="#">Men</a>
            </li>
            <li>
              <a href="#">Accessories</a>
            </li>
          </ul>
          <div class="social-links">
            <a href="www.twitter.com"><i class="fab fa-twitter"></i></a>
            <a href="www.facebook.com"><i class="fab fa-facebook"></i></a>
            <a href="www.google.com"> <i class="fab fa-google"></i></a>
          </div>
        </div>

        <ul class="nav">
          <li><a href="{{ route('website.index') }}">Home</a></li>
          <li><a href="view">Products</a></li>
          <li class="dropdown">
            <a href="#category">Shop <i class="fas fa-chevron-down"></i></a>
            <div class="mega-menu">
              <ul class="column">
                <h3>Categories View</h3>
                <li><a href="#">Shop Left Sidebar</a></li>
                <li><a href="#">Shop Right Sidebar</a></li>
                <li><a href="#">Shop Full Width</a></li>
                <li><a href="#">Shop 100 Full Width</a></li>
                <li><a href="#">Shop Both Sidebars</a></li>
              </ul>
              <ul class="column">
                <h3>Shop Page</h3>
                <li><a href="#">Test RTL</a></li>
                <li><a href="#">My Cart</a></li>
                <li><a href="#">My Checkout</a></li>
                <li><a href="#">My Wishlist</a></li>
                <li><a href="#">My Account</a></li>
              </ul>
              <ul class="column">
                <h3>Product Types</h3>
                <li><a href="#">Simple Product</a></li>
                <li><a href="#">Variable Product</a></li>
                <li><a href="#">Virtual Product</a></li>
                <li><a href="#">Grouped Product</a></li>
                <li><a href="#">Downloadable Product</a></li>
              </ul>
              <div class="best-sellers">
                <h3>Best Sellers</h3>
                <div class="product">
                  <a href="details.html?id=Sho-W-002">
                    <img src="{{ asset('web\images/shoes10.png') }}" alt="Plain brown shoes" />
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
          <li><a href="about" >About</a></li>
          <li><a href="#footer">Contact</a></li>
        </ul>
        <div class="icons">
        <i class="bi bi-person" id="profile-icon"></i>
          <i id="icon" class="bi bi-heart"></i>
          <i id="icon" class="bi bi-cart3">
            <div class="product">
              <p>No products in the cart</p>
            </div>
          </i>
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
          <a href="www.twitter.com"><i class="fab fa-twitter"></i></a>
          <a href="www.facebook.com"><i class="fab fa-facebook"></i></a>
          <a href="www.google.com"> <i class="fab fa-google"></i></a>
        </div>
      </div>
    </header>
    <!-- End Header -->
   {{ $slot }}
    <!-- Start Footer -->
    <div class="footer" id="footer" >
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
                <a href="mailto:shathadogh872@gmail.com "
                  >shathadogh872@gmail.com</a
                >
              </p>
            </div>
          </div>
          <div class="content">
            <i class="fa fa-link"></i>
            <div class="details">
              <h4>Website:</h4>
              <p><a href="http://www.domain.com">http://www.domain.com</a></p>
            </div>
          </div>
        </div>
        <div class="column">
          <h3 id="info">Information</h3>
          <ul class="information">
            <li>
              <i class="fa fa-chevron-right"></i>
              <i class="fa fa-chevron-right"></i><a href="#"> My Account</a>
            </li>
            <li>
              <i class="fa fa-chevron-right"></i>
              <i class="fa fa-chevron-right"></i><a href="#"> My Wishlist</a>
            </li>
            <li>
              <i class="fa fa-chevron-right"></i>
              <i class="fa fa-chevron-right"></i><a href="#"> Shopping</a>
            </li>
            <li>
              <i class="fa fa-chevron-right"></i>
              <i class="fa fa-chevron-right"></i><a href="#"> About Us</a>
            </li>
            <li>
              <i class="fa fa-chevron-right"></i>
              <i class="fa fa-chevron-right"></i
              ><a href="#"> Terms & Condition</a>
            </li>
            <li>
              <i class="fa fa-chevron-right"></i>
              <i class="fa fa-chevron-right"></i><a href="#"> Order Status</a>
            </li>
          </ul>
        </div>
        <div class="column">
          <h3 id="info">Follow Us</h3>
          <ul class="follow">
            <li>
              <i class="fa fa-chevron-right"></i>
              <i class="fa fa-chevron-right"></i><a href="#"> Facebook</a>
            </li>
            <li>
              <i class="fa fa-chevron-right"></i>
              <i class="fa fa-chevron-right"></i><a href="#"> Google+</a>
            </li>
            <li>
              <i class="fa fa-chevron-right"></i>
              <i class="fa fa-chevron-right"></i><a href="#"> YouTube</a>
            </li>
            <li>
              <i class="fa fa-chevron-right"></i>
              <i class="fa fa-chevron-right"></i><a href="#"> Twitter</a>
            </li>
            <li>
              <i class="fa fa-chevron-right"></i>
              <i class="fa fa-chevron-right"></i><a href="#">Instagram</a>
            </li>
            <li>
              <i class="fa fa-chevron-right"></i>
              <i class="fa fa-chevron-right"></i><a href="#">Pinterest</a>
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
              <img src="{{ asset('web/images/telegram.png') }}" alt="telegram" />
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
            <strong>&copy;</strong> Copyright 2025 <a href="#">AnyWhere</a> -
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
   <div class="popup hide-popup">
    <div class="popup-content">
      <button id="closeBtn" class="closeBtn close-popup">
        <i class="fas fa-times"></i>
      </button>
      <div class="popup-left">
        <div class="popup-img-container">
          <img class="popup-img" src="{{ asset('web/images/shop2.png') }}" alt="">
        </div>
      </div>
      <div class="popup-right">
        <div class="right-content">
          <h1>Get Discount <span>50%</span>off </h1>
          <p>Sign up to our newsletter and save 30% for your next purchase. No spam, We promise  </p>
          <form action="">
            <input type="email" placeholder="Enter Your Email...." class="popup-form">
            <a href="">Subscribe</a>
          </form>
        </div>
      </div>
    </div>
   </div>

    <script src="{{asset('web/js/main.js') }}"></script>

  </body>
</htm>
