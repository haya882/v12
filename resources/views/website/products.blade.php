
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
          <li><a href="#">Home</a></li>
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
 <!-- Start products -->


 <div class="all-products" >
    <div class="scroll"></div>

      <div class="side" >
        <h3>Product Categories</h3>
        <ul class="menu" id="mobile-menu">
          <li><a href="{{ route('website.products ') }}" data-filter="all" onclick="filterProductsByGenderCategoryAndSubcategory('all', 'all', 'all')">  All</a></li>

          <li>
            <a href="#"  onclick="filterProductsByGenderCategoryAndSubcategory('women')"> Women's <span class="toggle" data-target="women-options">+</span></a>
            <ul class="submenu" id="women-options">
              <li><a href="#"onclick="filterProductsByGenderCategoryAndSubcategory('women','Accessories')"><i class="fas fa-chevron-right icon"></i> Accessories</a></li>
              <li>
                <a href="#" onclick="filterProductsByGenderCategoryAndSubcategory( 'women', 'Clothing')"><i class="fas fa-chevron-right icon"></i> Clothing <span class="toggle" data-target="clothing-options">+</span></a>
                <ul class="submenu" id="clothing-options">
                  <li><a href="#" onclick="filterProductsByGenderCategoryAndSubcategory( 'women', 'Clothing','dresses')"><i class="fas fa-chevron-right icon"></i> Dresses</a></li>
                  <li><a href="#" onclick="filterProductsByGenderCategoryAndSubcategory( 'women', 'Clothing','pants')"><i class="fas fa-chevron-right icon"></i> Pants</a></li>
                  <li><a href="#"  onclick="filterProductsByGenderCategoryAndSubcategory( 'women', 'Clothing','blouses')"><i class="fas fa-chevron-right icon"></i> Blouses</a></li>
                  <li><a href="#"  onclick="filterProductsByGenderCategoryAndSubcategory( 'women', 'Clothing','skirts')"> <i class="fas fa-chevron-right icon"></i> Skirts</a></li>
                </ul>
              </li>
              <li><a href="#"  onclick="filterProductsByGenderCategoryAndSubcategory( 'women', 'MakeUp')"><i class="fas fa-chevron-right icon"></i> MakeUp</a></li>
              <li><a href="#"  onclick="filterProductsByGenderCategoryAndSubcategory( 'women', 'handbag')" ><i class="fas fa-chevron-right icon"></i> HandBag</a></li>
              <li><a href="#" onclick="filterProductsByGenderCategoryAndSubcategory( 'women', 'glasses')" ><i class="fas fa-chevron-right icon"></i> Sun Glasses</a></li>
              <li><a href="#" onclick="filterProductsByGenderCategoryAndSubcategory( 'women', 'shoes')"><i class="fas fa-chevron-right icon"></i> Shoes</a></li>
            </ul>
          </li>
          <li>
            <a href="#"  onclick="filterProductsByGenderCategoryAndSubcategory('men')">Men's <span class="toggle" data-target="men-options">+</span></a>
            <ul class="submenu" id="men-options">
              <li>
                <a href="#"  onclick="filterProductsByGenderCategoryAndSubcategory('men', 'Accessories')"><i class="fas fa-chevron-right icon"></i> Accessories <span class="toggle" data-target="accessories-options">+</span></a>
                <ul class="submenu" id="accessories-options">
                  <li><a href="#" onclick="filterProductsByGenderCategoryAndSubcategory('men', 'Accessories', 'watches')"><i class="fas fa-chevron-right icon"></i> Watches</a></li>
                  <li><a href="#"  onclick="filterProductsByGenderCategoryAndSubcategory('men', 'Accessories', 'belts')"><i class="fas fa-chevron-right icon"></i> Belts</a></li>
                  <li><a href="#" onclick="filterProductsByGenderCategoryAndSubcategory('men', 'Accessories', 'rings')"><i class="fas fa-chevron-right icon"></i> Rings</a></li>
                </ul>
              </li>
              <li>
                <a href="#"  onclick="filterProductsByGenderCategoryAndSubcategory( 'men', 'Clothing')"><i class="fas fa-chevron-right icon"></i> Clothing <span class="toggle" data-target="mens-clothing-options">+</span></a>
                <ul class="submenu" id="mens-clothing-options">
                  <li><a href="#"  onclick="filterProductsByGenderCategoryAndSubcategory( 'men', 'Clothing' ,'shirts')"><i class="fas fa-chevron-right icon"></i> Shirts</a></li>
                  <li><a href="#"  onclick="filterProductsByGenderCategoryAndSubcategory( 'men', 'Clothing' ,'pants')"><i class="fas fa-chevron-right icon"></i> Pants</a></li>
                  <li><a href="#"  onclick="filterProductsByGenderCategoryAndSubcategory( 'men', 'Clothing' ,'suit')"><i class="fas fa-chevron-right icon"></i> Full Suit</a></li>
                  <li><a href="#"  onclick="filterProductsByGenderCategoryAndSubcategory( 'men', 'Clothing' ,'jeans')"><i class="fas fa-chevron-right icon"></i> Jeans</a></li>
                  <li><a href="#"  onclick="filterProductsByGenderCategoryAndSubcategory( 'men', 'Clothing' ,'sports tracksuits')"><i class="fas fa-chevron-right icon"></i> Sports Tracksuit</a></li>
                </ul>
              </li>
              <li><a href="#"  onclick="filterProductsByGenderCategoryAndSubcategory( 'men', 'handbag')" ><i class="fas fa-chevron-right icon"></i> HandBag</a></li>
              <li><a href="#" onclick="filterProductsByGenderCategoryAndSubcategory( 'men', 'glasses')"><i class="fas fa-chevron-right icon"></i> Sun Glasses</a></li>
              <li><a href="#"  onclick="filterProductsByGenderCategoryAndSubcategory( 'men', 'shoes')"><i class="fas fa-chevron-right icon"></i> Shoes</a></li>
            </ul>
          </li>
        </ul>
      </div>
     </div>

       <div class="details-products"
        <div class="container grid" id="product-container">
          <div class="image">
            <img src="{{ asset('web/images/Accessories1.png') }}" alt="Accessories1" />
            <div class="content">
              <a href="#">Accessories</a>
              <h2>Blue bracelet</h2>
              <span>10$</span>
            </div>
            <div class="event">
              <a href="#"
                ><i class="fas fa-cart-plus" data-text="Add To Cart"></i
              ></a>
              <a href="#"><i class="fas fa-heart" data-text="WatchList"></i></a>
            </div>
          </div>
          <div class="image">
            <img src="{{ asset('web/images/shoes6.png') }}" alt="shoes4" />
            <div class="content">
              <a href="#">Shoes</a>
              <h2>Light brown men's shoes</h2>
              <span>75$</span>
            </div>
            <div class="event">
              <a href="#"
                ><i class="fas fa-cart-plus" data-text="Add To Cart"></i
              ></a>
              <a href="#"><i class="fas fa-heart" data-text="WatchList"></i></a>
            </div>
          </div>
          <div class="image">
            <img src="{{ asset('web/images/clothing15.png') }}" alt="clothing15" />
            <div class="content">
              <a href="#">Clothing</a>
              <h2>Women's formal pants</h2>
              <span>50$</span>
            </div>
            <div class="event">
              <a href="#"
                ><i class="fas fa-cart-plus" data-text="Add To Cart"></i
              ></a>
              <a href="#"><i class="fas fa-heart" data-text="WatchList"></i></a>
            </div>
          </div>
          <div class="image">
            <img src="{{ asset('web/images/handbag3.png') }}" alt="handbag3" />
            <div class="content">
              <a href="#">HandBag</a>
              <h2>White women's bag</h2>
              <span>40$</span>
            </div>
            <div class="event">
              <a href="#"
                ><i class="fas fa-cart-plus" data-text="Add To Cart"></i
              ></a>
              <a href="#"><i class="fas fa-heart" data-text="WatchList"></i></a>
            </div>
            <div class="discount">-20%</div>
          </div>
          <div class="image">
            <img src="{{ asset('web/images/makeup11.png') }}" alt="makeup11" />
            <div class="content">
              <a href="#">MakeUp</a>
              <h2>Pink lipstick</h2>
              <span>40$</span>
            </div>
            <div class="event">
              <a href="#"
                ><i class="fas fa-cart-plus" data-text="Add To Cart"></i
              ></a>
              <a href="#"><i class="fas fa-heart" data-text="WatchList"></i></a>
            </div>
          </div>
          <div class="image">
            <img src="{{ asset('web/images/shoes3.png') }}" alt="shoes3" />
            <div class="content">
              <a href="#">Shoes</a>
              <h2>Women's heeled shoes</h2>
              <span>70$</span>
            </div>
            <div class="event">
              <a href="#"
                ><i class="fas fa-cart-plus" data-text="Add To Cart"></i
              ></a>
              <a href="#"><i class="fas fa-heart" data-text="WatchList"></i></a>
            </div>
          </div>
          <div class="image">
            <img src="{{ asset('web/images/glasses5.png') }}" alt="glasses5" />
            <div class="content">
              <a href="#">Glasses</a>
              <h2>Women's glasses</h2>
              <span>30$</span>
            </div>
            <div class="event">
              <a href="#"
                ><i class="fas fa-cart-plus" data-text="Add To Cart"></i
              ></a>
              <a href="#"><i class="fas fa-heart" data-text="WatchList"></i></a>
            </div>
            <div class="discount">-20%</div>
          </div>
          <div class="image">
            <img src="{{ asset('web/images/clothing9.png') }}" alt="clothing9" />
            <div class="content">
              <a href="#">Clothing</a>
              <h2>Men's jeans</h2>
              <span>65$</span>
            </div>
            <div class="event">
              <a href="#"
                ><i class="fas fa-cart-plus" data-text="Add To Cart"></i
              ></a>
              <a href="#"><i class="fas fa-heart" data-text="WatchList"></i></a>
            </div>
          </div>
  </div>

      <div class="pagination-container">
        <button id="prev-btn" onclick="prevPage()">Prev</button>
        <div id="pagination-numbers"></div>
        <button id="next-btn" onclick="nextPage()">Next</button>
      </div>
    </div>
      <!-- End Categories -->

<script  src=" {{ asset('web/js/products.js') }}"></script>



  </body>
</html>
