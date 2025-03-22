<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css" />
    <!--Render All Element Normally-->
    <link rel="stylesheet" href="CSS/normalize.css" />
    <!-- Webfont library -->
    <link rel="stylesheet" href="CSS/all.min.css" />
    <!-- Google font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Concert+One&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Font Awesome link -->
    <script
      src="https://kit.fontawesome.com/c1a12a9bed.js"
      crossorigin="anonymous"
    ></script>
    <!-- Bootstrap link -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css"
      rel="stylesheet"
    />
  <script src="loading.js" defer></script>

  </head>
  <body>
    <!-- Start Header -->
    <header>
      <div class="container">
        <a href="index.html"
          ><img class="image" src="images/logo2.png" alt="logo"
        /></a>
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
              <a href="index.html">Home</a>
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
                        <i class="fas fa-chevron-right icon"></i> Women's</a
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
                    <i class="fas fa-chevron-right icon"></i> Men's</a
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
              <a href="#">About</a>
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
                    ><i class="fas fa-chevron-right icon"></i> Women's</a
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
              <a href="#">Men's</a>
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
          <li><a href="index.html">Home</a></li>
          <li><a href="view.html">Products</a></li>
          <li class="dropdown">
            <a href="index.html#category"
              >Shop <i class="fas fa-chevron-down"></i
            ></a>
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
            <img src="images/shoes10.png" alt="Plain brown shoes" />
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
                  <img src="images/shoes5.png" alt="comfortable shoes" />
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
          <li><a href="about.html">About</a></li>
          <li><a href="index.html#footer">Contact</a></li>
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
    <div class="content-products" data-aos="fade-up" data-aos-duration="2000">
      <div class="container">

        <div class="left-side">
          <div class="images">
            <img src="images/Accessories1.jpg" id="product-image" alt="" />
            <div class="zoom-lens"></div>
          </div>
          <div class="main-content">
            <h2 id="product-title">Basic Jumper for Women</h2>
            <div class="stars">
              <i class="fas fa-star filled"></i>
              <i class="fas fa-star filled"></i>
              <i class="fas fa-star filled"></i>
              <i class="fas fa-star filled"></i>
              <i class="fas fa-star filled"></i>
              <span class="review-count">(1 Reviews)</span>
            </div>
            <p id="product-description">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem
              ipsum dolor sit amet, consectetur adipiscing elit.
            </p>
            <h3 class="price" id="product-price">$80.00</h3>
            <div class="display">
              <label for="size" id="size-label">Size:</label>
              <select id="size">
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
                <option value="XXL">XXL</option>

              </select>
              <div class="color-options" id="color-options">
                <!-- <div
                  class="color-circle"
                  data-color="red"
                  style="background-color: red"
                ></div> -->
                <!-- <div
                  class="color-circle"
                  data-color="blue"
                  style="background-color: blue"
                ></div>
                <div
                  class="color-circle"
                  data-color="black"
                  style="background-color: black"
                ></div> -->
              </div>
              <p>Color: <span id="selected-color">None</span></p>
            </div>
            <div class="counter">
              <label for="counterValue">Quantity:</label>
              <button id="decrement">-</button>
              <input type="number" id="counterValue" value="1" min="1" />
              <button id="increment">+</button>
            </div>
            <div class="add">
              <button class="shopping-cart">
                <i class="fas fa-shopping-cart"></i>
                <span class="add-to-cart"> Add to Cart</span>
              <span class="added"> ADDED :)</span>
              <i class="fas fa-shopping-cart"></i>
              <i class="fas fa-box"></i>
            </button>
              <button><i class="fas fa-heart"></i>Add to Wishlist</button>
            </div>
            <div id="products-container"></div>
            <div id="cart-popup" class="hidden">
                <div class="popup-content">
                    <span class="close-popup">&times;</span>
                    <p>Item added to your cart</p>
                    <p id="cart-items-count">1 ITEMS IN THE CART ($30.00)</p>
                    <button id="continue-shopping">Continue Shopping</button>
                    <a href="cart.html" class="go-to-cart">Go to the Cart</a>
                </div>
            </div>
            <div class="tags">
              <p>Product Code: <span id="product-sku">JMP-W-RED-001</span></p>
              <p>Category: <a href="">Accessories</a></p>

            </div>
          </div>
          <div class="product-container">
            <div class="tabs">
              <button
                class="tab-button active"
                onclick="showTab('description')"
              >
                DESCRIPTION
              </button>
              <button class="tab-button" onclick="showTab('reviews')">
                REVIEWS (1)
              </button>
            </div>
            <div id="description" class="tab-content active">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam
                fringilla augue nec est tristique auctor. Ipsum metus feugiat
                sem, quis fermentum turpis eros eget velit. Donec ac tempus
                ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Nam fringilla augue nec est tristique auctor. Ipsum metus
                feugiat sem, quis fermentum turpis eros eget velit. Donec ac
                tempus ante. Lorem ipsum dolor sit amet, consectetur adipiscing
                elit. Nam fringilla augue nec est tristique auctor. Ipsum metus
                feugiat sem, quis fermentum turpis eros eget velit. Donec ac
                tempus ante.
              </p>
            </div>
            <div id="reviews" class="tab-content">
              <p>There are no reviews yet.</p>
              <p>Be the first to review ..</p>
              <form class="review-form">
                <label for="rating">Your rating :</label>
                <div class="rating" id="rating">
                  <div class="group" data-value="1">
                    <span class="star">★</span>
                  </div>
                  <div class="group" data-value="2">
                    <span class="star">★</span><span class="star">★</span>
                  </div>
                  <div class="group" data-value="3">
                    <span class="star">★</span><span class="star">★</span
                    ><span class="star">★</span>
                  </div>
                  <div class="group" data-value="4">
                    <span class="star">★</span><span class="star">★</span
                    ><span class="star">★</span><span class="star">★</span>
                  </div>
                  <div class="group" data-value="5">
                    <span class="star">★</span><span class="star">★</span
                    ><span class="star">★</span><span class="star">★</span
                    ><span class="star">★</span>
                  </div>
                </div>
                <div class="form">
                  <div>
                    <label>Name :</label>
                    <input type="text" required />
                  </div>
                  <div>
                    <label>Email :</label>
                    <input type="email" required />
                  </div>
                </div>
                <label>Your review :</label>
                <textarea required></textarea>

                <button type="submit">Submit</button>
              </form>
            </div>
          </div>
        </div>
        <div class="right-side">
          <div class="best-sellers">
            <h3>Best Sellers</h3>
            <div class="product">
              <a href="details.html?id=Sho-W-002">
                <img src="images/shoes10.png" alt="Plain brown shoes" />
                </a>
              <div class="info">
                <p>Plain brown shoes</p>
                <div class="stars">
                  <i class="fas fa-star filled"></i>
                  <i class="fas fa-star filled"></i>
                  <i class="fas fa-star filled"></i>
                  <i class="fas fa-star filled"></i>
                  <i class="fas fa-star filled"></i>
                </div>
                <div class="price">$75.00</div>
              </div>
            </div>
            <div class="product">
              <a href="details.html?id=Sho-M-016">
                <img src="images/shoes5.png" alt="comfortable shoes" />
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
            <div class="product">
              <a href="details.html?id=Acc-W-060">
              <img src="images/Accessories12.png" alt="Accessories12" />
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
            <div class="product">
              <a href="details.html?id=Clot-M-094">
                <img src="images/clothing42.png" alt="clothing42" />

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
      </div>
    </div>
      <!-- Start New arrivals -->
      <div class="new-arrivals" data-aos="fade-up" data-aos-duration="2000">
        <div class="spacial-content">
          <h1 id="font">New arrivals</h1>
          <p>
            We offer you a new range of products that are characterized by high
            quality and comfort.
          </p>
        </div>
        <div class="container">
          <div class="image">
            <a href="details.html?id=Clot-W-091"> 
               <img src="images/clothing2.png" alt="clothing2" />
              </a>
            <div class="content">
              <a href="products.html?category=Clothing">Clothing</a>
              <h2>Comfortable and beautiful blouse</h2>
              <span>$60.00</span>
            </div>
            <div class="event">
              <a href="#"
                ><i class="fas fa-cart-plus" data-text="Add To Cart"></i
              ></a>
              <a href="#"><i class="fas fa-heart" data-text="WatchList"></i></a>
            </div>
          </div>
          <div class="image">
            <a href="details.html?id=Clot-M-070">
              <img src="images/clothing9.jpg" alt="clothing9" />
            </a>
            <div class="content">
              <a href="products.html?category=Clothing">Clothing</a>
              <h2>Full formal suit excellent material</h2>
              <span>150$</span>
            </div>
            <div class="event">
              <a href="#"
                ><i class="fas fa-cart-plus" data-text="Add To Cart"></i
              ></a>
              <a href="#"><i class="fas fa-heart" data-text="WatchList"></i></a>
            </div>
            <div class="discount">-30%</div>
          </div>
          <div class="image">
            <a href="details.html?id=Clot-M-054">
              <img src="images/clothing38.png" alt="clothing38"
            /></a>
            <div class="content">
              <a href="products.html?category=Clothing">Clothing</a>
              <h2>Grey sports tracksuit, excellent quality</h2>
              <span>$150.00</span>
            </div>
            <div class="event">
              <a href="#"
                ><i class="fas fa-cart-plus" data-text="Add To Cart"></i
              ></a>
              <a href="#"><i class="fas fa-heart" data-text="WatchList"></i></a>
            </div>
          </div>
          <div class="image">
            <a href="details.html?id=Clot-W-066">
              <img src="images/clothing13.jpg" alt="clothing13"
            /></a>
            <div class="content">
              <a href="products.html?category=Clothing">Clothing</a>
              <h2>Modern design skirt</h2>
              <span>$60.00</span>
            </div>
            <div class="event">
              <a href="#"
                ><i class="fas fa-cart-plus" data-text="Add To Cart"></i
              ></a>
              <a href="#"><i class="fas fa-heart" data-text="WatchList"></i></a>
            </div>
          </div>
        </div>
      </div>
      <!-- End New arrivals -->
      <!-- Start Footer -->
      <div class="footer" id="footer">
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
              Be the first to know about the latest updates & exclusive
              promotions from us . No spam, we guarantee!
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
    
       
      <script   src="js/products.js"  ></script>
      <script   src="js/details.js"  ></script>
      
      
      
    
  </body>
</html>
