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
    <!-- --------==================Start Cart====================---------- -->
    <section class="cart-section">
        <div class="spacial-content">
            <h1>
              My Cart   
            </h1>
        </div>
      <div class="container">
        <div class="table-container ">
          <table class="table">
            <tr>
              <th>Image</th>
              <th>Name Product</th>
              <th>Price</th>
              <th>Quantity</th>
              <th>Subtotal</th>
              <th>Remove</th>
            </tr>
            <tr>
              <td>
                <img src="images/Accessories1.jpg" alt="" class="table-img" />
              </td>
              <td>
                <h3 class="table-title">Elegant bracelet</h3>
                <p class="table-discreption">
                  A pair of elegant bracelets – one adorned with timeless
                  pearls, and the other a gold-toned beauty featuring pearls
                </p>
              </td>
              <td><span class="table-price">$30.00</span></td>
              <td>
                <div class="counter">
                  <button class="decrement">-</button>
                  <input type="number" class="counterValue" value="1" min="1" />
                  <button class="increment">+</button>
                </div>
              </td>

              <td>
                <span class="table-subtotal"> $60.00 </span>
              </td>
              <td><i class="fa-solid fa-trash table-trash"></i></td>
            </tr>
            <tr>
              <td><img src="images/shoes10.png" alt="" class="table-img" /></td>
              <td>
                <h3 class="table-title">Plain brown shoes</h3>
                <p class="table-discreption">
                  Classic men's shoes in beige and brown, offering a timeless
                  and versatile style for any occasion.
                </p>
              </td>
              <td><span class="table-price">$50.00</span></td>
              <td>
                <div class="counter">
                  <button class="decrement">-</button>
                  <input type="number" class="counterValue" value="1" min="1" />
                  <button class="increment">+</button>
                </div>
              </td>
              <td>
                <span class="table-subtotal"> $100.00 </span>
              </td>
              <td><i class="fa-solid fa-trash table-trash"></i></td>
            </tr>
            <tr>
              <td>
                <img src="images/clothing16.png" alt="" class="table-img" />
              </td>
              <td>
                <h3 class="table-title">Two-tone dress</h3>
                <p class="table-discreption">
                  Elegant two-tone maxi dress in olive green and beige, perfect
                  for modest wear with a graceful and sophisticated look.
                </p>
              </td>
              <td><span class="table-price">$100.00</span></td>
              <td>
                <div class="counter">
                  <button class="decrement">-</button>
                  <input type="number" class="counterValue" value="1" min="1" />
                  <button class="increment">+</button>
                </div>
              </td>
              <td>
                <span class="table-subtotal"> $200.00 </span>
              </td>
              <td><i class="fa-solid fa-trash table-trash"></i></td>
            </tr>
          </table>
          <div class="add">
            <button class="shopping-cart">
              <i class="fa-solid fa-shuffle"></i>
              Update Card
            </button>
            <button>
              <i class="fas fa-shopping-cart"></i> Continue Shopping
            </button>
          </div>
        </div>

        <div class="spacial-content">
          <h1><span></span><span></span><span></span><span></span></h1>
        </div>
        <div class="cart-group grid">
          <div>
            <div class="cart-shipping">
              <h3 class="section-title">Calculate Shipping</h3>
              <form action="" class="form grid">
                <input
                  type="text"
                  placeholder="State / Country"
                  class="form-input"
                  name=""
                  id=""
                />
                <div class="form-group grid">
                  <input
                    type="text"
                    placeholder="City"
                    class="form-input"
                    name=""
                    id=""
                  />

                  <input
                    type="text"
                    placeholder=" PostCode / ZIP"
                    class="form-input"
                    name=""
                    id=""
                  />
                </div>
                <div class="add">
                  <button class="shopping-cart">
                    <i class="fa-solid fa-shuffle"></i>
                    Update
                  </button>
                </div>
              </form>
            </div>
            <div class="cart-coupon">
              <h3 class="section-title">Apply Coupon</h3>
              <form action="" class="coupon-form  ">
                <div class="form-group  ">
                  <input
                    type="text"
                    placeholder="Enter Your coupon "
                    class="form-input"
                    name=""
                    id=""
                  />
                  <div class="add">
                    <button class="shopping-cart">
                      <i class="fa-solid fa-bag-shopping"></i>
                      Apply
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        
        <div class="cart-total">
          <h3 class="section-title">Cart Totals</h3>
          <table class="cart-total-table">
            <tr>
              <td><span class="cart-total-section">Cart Subtotal</span></td>
              <td><span class="cart-total-price">$240.00</span></td>
            </tr>
            <tr>
              <td><span class="cart-total-section">Shipping</span></td>
              <td><span class="cart-total-price">$30.00</span></td>
            </tr>
            <tr>
              <td><span class="cart-total-section">Total</span></td>
              <td><span class="cart-total-price">$270.00</span></td>
            </tr>
          </table>
          <a href="checkout.html" class="add">
            <button class="shopping-cart">
              <i class="fa-solid fa-money-check-dollar"></i>
              Proceed To Checkout
            </button>
          </a>
        </div>
      </div>
    </div>
    </section>
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
      ...................................................
      ................................................... -->

    <script src="js/main.js"></script>
  </body>
</html>
