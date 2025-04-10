<x-layout>


    <!-- Start Landing -->

    <button id="top-btn"><i class="fa-solid fa-arrow-up"></i></button>
    <div class="scroll"></div>
    <div class="landing" id="landing">
      <div class="overlay2"></div>
      <div class="container">
        <h5>handbag new collection</h5>
        <h3>New arrivals!</h3>
        <h1>amazing Anywhere</h1>
        <p>
          Enjoy a wide range of high-quality products that suit all tastes and
          keep up with the latest fashion trends. Here, you will find everything
          you are looking for and more!
        </p>
        <a  href="{{ route('website.products') }}"><button>Shop Now</button></a>
      </div>
    </div>

    <!-- Start Who we are -->
    <div class="about" id="about" data-aos="fade-up"  data-aos-duration="2000">
      <div class="container">
        <div class="spacial-content">
          <p>Who We Are</p>
          <h1>
            Welcome To AnyWhere <span></span><span></span><span></span
            ><span></span>
          </h1>
          <div class="content">
            <p>
              Welcome to our website! We are here to provide you with an
              exceptional shopping experience that includes everything you need
              to complete your look with elegance. From luxury clothing for men
              and women to distinctive accessories, amazing bags, and various
              shoes, we have everything you need to add a unique touch to your
              look.
            </p>
            <span>Shatha & Haya - </span><span>CEO AnyWhere</span>
          </div>
        </div>
      </div>
    </div>
    <!-- End Who we are -->
    <!-- start view product -->
    <div class="view" id="product" >
      <div class="spacial-content">
        <h1 id="font">Our various departments</h1>
        <p>
          In our store, you will find a wide range of clothing,
          accessories,shoes and bags for men and women, carefully selected to
          meet the needs of everyone.
        </p>
      </div>
      <div class="container grid">
        <div class="image">
          <a href="products.html?category=Clothing">
          <img src="{{ asset('web/images/view1.png') }}" alt="" />
          <button class="button">Clothings</button>
           </a>
        </div>
        <div class="image">
          <a href="products.html?category=Shoes">
          <img src="{{ asset('web/images/view2.png') }}" alt="" />
          <button class="button">Shoes</button>
          </a>
        </div>
        <div class="image">
          <a href="products.html?category=Glasses">
          <img src="{{ asset('web/images/view3.png') }} "alt="" />
          <button class="button">Sun Glasses</button>
          </a>
        </div>
        <div class="image">
          <a href="products.html?category=Accessories">
          <img src="{{ asset('web/images/view6.png') }}" alt="" />
          <button class="button">Accessories</button>
          </a>
        </div>
        <div class="image">
          <a href="products.html?category=MakeUp">
          <img src="{{ asset('web/images/view5.png') }}" alt="" />
          <button class="button">MakeUp</button>
          </a>
        </div>
        <div class="image">
          <a href="products.html?category=HandBag">
          <img src="{{ asset('web/images/view4.png') }}" alt="" />
          <button class="button">HandBag</button>
          </a>
        </div>
      </div>
    </div>
    <!-- end view product -->
    <!-- Start Categories -->

    <div class="categories" id="category"  data-aos="fade-up"  data-aos-duration="2000">
      <div class="spacial-content">
        <h1 id="font">Explore our collections</h1>
        <p>
          A unique shopping experience that includes the best options for
          fashion and accessories for all tastes.
        </p>
      </div>
      <h2 class="category-title">For Women's</h2>
      <div class="container grid" id="product-container">
        <div class="image">
            <a href="{{ route('details', ['id' => 'Acc-W-001']) }}">
            <img src="{{ asset('web/images/Accessories1.jpg') }}" alt="Accessories1" />
        </a>
          <div class="content">
            <a href="products.html?category=Accessories">Accessories</a>
            <h2>Elegant bracelet</h2>
            <span>$30.00</span>
          </div>

        <div class="event"  data-product-id="Acc-W-001">
          <a onclick="addProductToCart(event)">
            <i class="fas fa-cart-plus" data-text="Add To Cart"></i>
        </a>

        <a onclick="addProductToWishlist(event)"data-product-id="Acc-W-001">
            <i class="fas fa-heart" data-text="WatchList"></i>
        </a>
        </div>


        </div>

        <div class="image">
          <a href="details.html?id=Sho-W-002">
          <img src="{{ asset('web/images/shoes10.png') }}" alt="shoes10" />
        </a>
          <div class="content">
            <a href="products.html?category=Shoes">Shoes</a>
            <h2>Plain brown shoes</h2>
            <span>$75.00</span>
          </div>
          <div class="event"  data-product-id="Sho-W-002">
            <a onclick="addProductToCart(event)">
              <i class="fas fa-cart-plus" data-text="Add To Cart"></i>
          </a>

          <a onclick="addProductToWishlist(event)" data-product-id="Sho-W-002">
              <i class="fas fa-heart" data-text="WatchList"></i>
          </a>
          </div>
          <div class="discount">-20%</div>

        </div>
        <div class="image">
          <a href="details.html?id=Clot-W-003">
          <img src="{{ asset('web/images/clothing16.png') }}" alt="clothing16" />
        </a>
          <div class="content">
            <a href="products.html?category=Clothing" >Clothing</a>
            <h2>Two-tone dress</h2>
            <span>$130.00</span>
          </div>
          <div class="event"  data-product-id="Clot-W-003">
            <a onclick="addProductToCart(event)">
              <i class="fas fa-cart-plus" data-text="Add To Cart"></i>
          </a>

          <a onclick="addProductToWishlist(event)" data-product-id="Clot-W-003">
              <i class="fas fa-heart" data-text="WatchList"></i>
          </a>
          </div>
        </div>
        <div class="image">
          <a href="details.html?id=Hand-W-004">
          <img src="{{ asset('web/images/handbag3.png') }}" alt="handbag3" />
        </a>
          <div class="content">
            <a href="products.html?category=HandBag">HandBag</a>
            <h2>Light brown women's bag</h2>
            <span>$60.00</span>
          </div>
          <div class="event"  data-product-id="Hand-W-004">
            <a onclick="addProductToCart(event)">
              <i class="fas fa-cart-plus" data-text="Add To Cart"></i>
          </a>

          <a onclick="addProductToWishlist(event)" data-product-id="Hand-W-004">
              <i class="fas fa-heart" data-text="WatchList" ></i>
          </a>
          </div>
        </div>
        <div class="image">
          <a href="details.html?id=Clot-M-005">
          <img src="{{ asset('web/images/clothing12.png') }}" alt="clothing12" />
        </a>
          <div class="content">
            <a href="products.html?category=Clothing">Clothing</a>
            <h2>Men's beige pants</h2>
            <span>$70.00</span>
          </div>
          <div class="event"  data-product-id="Clot-M-005">
            <a onclick="addProductToCart(event)">
              <i class="fas fa-cart-plus" data-text="Add To Cart"></i>
          </a>

          <a onclick="addProductToWishlist(event)"  data-product-id="Clot-M-005">
              <i class="fas fa-heart" data-text="WatchList"></i>
          </a>
          </div>
        </div>
        <div class="image">
          <a href="details.html?id=Sho-M-006">
          <img src="{{ asset('web/images/shoes2.png') }}" alt="shoes2" />
        </a>
          <div class="content">
            <a href="products.html?category=Shoes">Shoes</a>
            <h2>Blue and brown shoes</h2>
            <span>$90.00</span>
          </div>
          <div class="event"  data-product-id="Sho-M-006">
            <a onclick="addProductToCart(event)">
              <i class="fas fa-cart-plus" data-text="Add To Cart"></i>
          </a>

          <a onclick="addProductToWishlist(event)" data-product-id="Sho-M-006">
              <i class="fas fa-heart" data-text="WatchList"></i>
          </a>
          </div>
        </div>
        <div class="image">
          <a href="details.html?id=Glass-M-007">
          <img src="{{ asset('web/images/glasses1.png') }}" alt="glasses1" />
        </a>
          <div class="content">
            <a href="products.html?category=Glasses">Glasses</a>
            <h2>Men's glasses</h2>
            <span>$30.00</span>
          </div>
          <div class="event"  data-product-id="Glass-M-007">
            <a onclick="addProductToCart(event)">
              <i class="fas fa-cart-plus" data-text="Add To Cart"></i>
          </a>

          <a onclick="addProductToWishlist(event)" data-product-id="Glass-M-007">
              <i class="fas fa-heart" data-text="WatchList"></i>
          </a>
          </div>

        </div>
        <div class="image">
          <a href="details.html?id=Clot-M-008">
          <img src="{{ asset('web/images/clothing11.png') }}" alt="clothing11" />
        </a>
          <div class="content">
            <a href="products.html?category=Clothing"  >Clothing</a>
            <h2>Distinctive shirt</h2>
            <span>$50.00</span>
          </div>
          <div class="event"  data-product-id="Clot-M-008">
            <a onclick="addProductToCart(event)">
              <i class="fas fa-cart-plus" data-text="Add To Cart"></i>
          </a>

          <a onclick="addProductToWishlist(event)" data-product-id="Clot-M-008">
              <i class="fas fa-heart" data-text="WatchList"></i>
          </a>
          </div>
          <div class="discount">10%</div>
        </div>
      </div>
      <h2 class="category-title2">For Men's</h2>
    </div>
    <!-- <div class="pagination-container">
      <button id="prev-btn" onclick="prevPage()">Prev</button>
      <div id="pagination-numbers"></div>
      <button id="next-btn" onclick="nextPage()">Next</button>
    </div> -->
    <div class="see">
    <a href="{{ route('website.products') }}"><button >See more </button></a>
  </div>
    <!-- End Categories -->
    <!-- Start designer -->
    <div class="designer"  data-aos="fade-up" data-aos-duration="2000">
      <div class="container">
        <h4>
          <i class="fas fa-quote-left"></i>
          This website has been carefully designed to provide a unique and easy
          shopping experience for users. Using modern user interface development
          techniques, the focus has been on providing a simple and responsive
          design that allows the user to navigate smoothly between sections and
          products.
          <i class="fas fa-quote-right"></i>
        </h4>
        <div class="design">
          <img src="{{ asset('web/images/designer1.jpg') }}" alt="ShathaDoghmosh" />
          <div class="content">
            <h2>Shatha doghmosh</h2>
            <span>Designer</span>
          </div>
        </div>
      </div>
    </div>
    <!-- End designer -->
    <!-- Start latest arrivals -->
    <div class="latest"  data-aos="fade-up" data-aos-duration="2000">
      <div class="spacial-content">
        <h1 id="font">Latest product</h1>
        <p>
          Enjoy our latest products carefully selected to meet your daily needs.
          Find out what suits you now!
        </p>
      </div>
      <div class="container">
        <div class="image">
          <a href="details.html?id=Clot-W-049
          "><img src="{{ asset('web/images/clothing30.png') }}" alt="clothing30" /></a>
          <div class="content">
            <a href="products.html?category=Clothing">Clothing</a>
            <h2>Distinctive modern dress</h2>
            <span>100$</span>
          </div>
          <div class="event"  data-product-id="Clot-W-049">
            <a onclick="addProductToCart(event)">
              <i class="fas fa-cart-plus" data-text="Add To Cart"></i>
          </a>

          <a onclick="addProductToWishlist(event)"data-product-id="Clot-W-049">
              <i class="fas fa-heart" data-text="WatchList"></i>
          </a>
          </div>
        </div>
        <div class="image">
          <a href="details.html?id=Acc-W-076"
            ><img src="{{ asset('web/images/Accessories18.png') }}" alt="Accessories18"
          /></a>
          <div class="content">
            <a href="products.html?category=Accessories">Accessories</a>
            <h2>Bracelet with a distinctive blue stone</h2>
            <span>$50</span>
          </div>
          <div class="event"  data-product-id="Acc-W-076">
            <a onclick="addProductToCart(event)">
              <i class="fas fa-cart-plus" data-text="Add To Cart"></i>
          </a>

          <a onclick="addProductToWishlist(event)" data-product-id="Acc-W-076">
              <i class="fas fa-heart" data-text="WatchList"></i>
          </a>
          </div>
          <div class="discount">-10%</div>
        </div>
        <div class="image">
          <a href="details.html?id=Clot-M-079"><img src="{{ asset('web/images/clothing40.png') }}" alt="clothing40" /> </a>
          <div class="content">
            <a href="products.html?category=Clothing">Clothing</a>
            <h2>Men's full-length orange new story</h2>
            <span>$160.00</span>
          </div>
          <div class="event"  data-product-id="Clot-M-079">
            <a onclick="addProductToCart(event)">
              <i class="fas fa-cart-plus" data-text="Add To Cart"></i>
          </a>

          <a onclick="addProductToWishlist(event)" data-product-id="Clot-M-079">
              <i class="fas fa-heart" data-text="WatchList"></i>
          </a>
          </div>
        </div>
        <div class="image">
          <a href="details.html?id=Acc-M-030"
            ><img src="{{ asset('web/images/Accessories22.png') }}" alt="Accessories22"
          /></a>
          <div class="content">
            <a href="products.html?category=Accessories">Accessories</a>
            <h2>Latest look watch</h2>
            <span>$90.00</span>
          </div>
          <div class="event"  data-product-id="Acc-M-030">
            <a onclick="addProductToCart(event)">
              <i class="fas fa-cart-plus" data-text="Add To Cart"></i>
          </a>

          <a onclick="addProductToWishlist(event)" data-product-id="Acc-M-030">
              <i class="fas fa-heart" data-text="WatchList"></i>
          </a>
          </div>
          <div class="discount">-20%</div>
        </div>
      </div>
    </div>
    <!-- End latest arrivals -->
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
            <img src="{{ asset('web/images/clothing2.png') }}" alt="clothing2" /></a>
          <div class="content">
            <a href="products.html?category=Clothing">Clothing</a>
            <h2>Comfortable and beautiful blouse</h2>
            <span>$60.00</span>
          </div>
          <div class="event"  data-product-id="Clot-W-091">
            <a onclick="addProductToCart(event)">
              <i class="fas fa-cart-plus" data-text="Add To Cart"></i>
          </a>

          <a onclick="addProductToWishlist(event)" data-product-id="Clot-W-091">
              <i class="fas fa-heart" data-text="WatchList"></i>
          </a>
          </div>
        </div>
        <div class="image">
          <a href="details.html?id=Clot-M-070">
            <img src="{{ asset('web/images/clothing9.jpg') }}" alt="clothing9" /></a>
          <div class="content">
            <a href="products.html?category=Clothing">Clothing</a>
            <h2>Full formal suit excellent material</h2>
            <span>150$</span>
          </div>
          <div class="event"  data-product-id="Clot-M-070">
            <a onclick="addProductToCart(event)">
              <i class="fas fa-cart-plus" data-text="Add To Cart"></i>
          </a>

          <a onclick="addProductToWishlist(event)" data-product-id="Clot-M-070">
              <i class="fas fa-heart" data-text="WatchList"></i>
          </a>
          </div>
          <div class="discount">-30%</div>
        </div>
        <div class="image">
          <a href="details.html?id=Clot-M-054">
            <img src="{{ asset('web/images/clothing38.png') }}" alt="clothing38" /></a>
          <div class="content">
            <a href="products.html?category=Clothing">Clothing</a>
            <h2>Grey sports tracksuit, excellent quality</h2>
            <span>$150.00</span>
          </div>
          <div class="event"  data-product-id="Clot-M-054">
            <a onclick="addProductToCart(event)">
              <i class="fas fa-cart-plus" data-text="Add To Cart"></i>
          </a>

          <a onclick="addProductToWishlist(event)"data-product-id="Clot-M-054">
              <i class="fas fa-heart" data-text="WatchList"></i>
          </a>
          </div>
        </div>
        <div class="image">
          <a href="details.html?id=Clot-W-066">
            <img src="{{ asset('web/images/clothing13.jpg') }}" alt="clothing13" />
          </a>
          <div class="content">
            <a href="products.html?category=Clothing">Clothing</a>
            <h2>Modern design skirt</h2>
            <span>$60.00</span>
          </div>
          <div class="event"  data-product-id="Clot-W-066">
            <a onclick="addProductToCart(event)">
              <i class="fas fa-cart-plus" data-text="Add To Cart"></i>
          </a>

          <a onclick="addProductToWishlist(event)" data-product-id="Clot-W-066">
              <i class="fas fa-heart" data-text="WatchList"></i>
          </a>
          </div>
        </div>
      </div>
    </div>
    <!-- End New arrivals -->
    <!-- Start available -->
    <div class="available" data-aos="fade-up" data-aos-duration="2000">
      <div class="spacial-content">
        <h1 id="font">Our Services</h1>
      </div>
      <div class="container">
        <div class="details">
          <i class="fa fa-truck"></i>
          <i class="fa fa-shipping-fast"></i>
          <h2>Free Shipping Worldwide</h2>
          <p>
            Enjoy fast and reliable delivery, wherever you are. We ensure your
            orders reach you safely, without any extra charges
          </p>
        </div>
        <div class="details">
          <i class="fa fa-sync-alt"></i>
          <i class="fa fa-piggy-bank"></i>
          <h2>Money Back Guarantee</h2>
          <p>
            Your satisfaction is our priority. If you're not happy with your
            purchase, return it within 30 days for a full refund
          </p>
        </div>
        <div class="details">
          <i class="fa fa-phone-volume"></i>
          <i class="fa fa-comment-dots"></i>
          <h2>online support 24/7</h2>
          <p>
            Get assistance anytime, anywhere. Our team is available round the
            clock to help you with any questions or concerns
          </p>
        </div>
      </div>
    </div>
    <!-- End available -->

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






</x-layout>
