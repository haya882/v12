<x-layout>

    <div class="content-products" data-aos="fade-up" data-aos-duration="2000">
        <div class="container">
          <div class="left-side">
            <div class="images">
              <img src="{{ asset('web/images/Accessories1.jpg') }}" id="product-image" alt="" />
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
             <div class="counter" data-product-id="123">
      <button class="decrement" id="decrement-123">-</button>
      <input type="number" class="counterValue" id="counterValue-123" value="1" min="1">
      <button class="increment" id="increment-123">+</button>
  </div>

  <div class="add">
    <button
          class="shopping-cart"
          data-id="JMP-W-RED-001"
          onclick="addToCart(this.getAttribute('data-id'), event)"
          >
          <i class="fas fa-shopping-cart"></i>
          <span class="add-to-cart"> Add to Cart</span>
          <span class="added"> ADDED :)</span>
          <i class="fas fa-shopping-cart"></i>
          <i class="fas fa-box"></i>
          </button>
          <button
          class="wishlist-button"
          data-product-id="Acc-W-060"
          onclick="addToWishlist(event)">
          <i class="fas fa-heart"></i> Add to Wishlist
        </button>
              </div>
              <div id="products-container"></div>
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
                      <input class="form-input" type="text" required />
                    </div>
                    <div>
                      <label>Email :</label>
                      <input  class="form-input" type="email" required />
                    </div>
                  </div>
                  <label>Your review :</label>
                  <textarea class="form-input" required></textarea>

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
                <img src="images/clothing2.png" alt="clothing2" /></a>
              <div class="content">
                <a href="products.html?category=Clothing">Clothing</a>
                <h2>Comfortable and beautiful blouse</h2>
                <span>$60.00</span>
              </div>
              <div class="event"  data-product-id="Clot-W-091">
                <a onclick="addProductToCart(event)">
                  <i class="fas fa-cart-plus" data-text="Add To Cart"></i>
              </a>

              <a onclick="addProductToWishlist(event)">
                  <i class="fas fa-heart" data-text="WatchList"></i>
              </a>
              </div>
            </div>
            <div class="image">
              <a href="details.html?id=Clot-M-070">
                <img src="images/clothing9.jpg" alt="clothing9" /></a>
              <div class="content">
                <a href="products.html?category=Clothing">Clothing</a>
                <h2>Full formal suit excellent material</h2>
                <span>150$</span>
              </div>
              <div class="event"  data-product-id="Clot-M-070">
                <a onclick="addProductToCart(event)">
                  <i class="fas fa-cart-plus" data-text="Add To Cart"></i>
              </a>

              <a onclick="addProductToWishlist(event)">
                  <i class="fas fa-heart" data-text="WatchList"></i>
              </a>
              </div>
              <div class="discount">-30%</div>
            </div>
            <div class="image">
              <a href="details.html?id=Clot-M-054">
                <img src="images/clothing38.png" alt="clothing38" /></a>
              <div class="content">
                <a href="products.html?category=Clothing">Clothing</a>
                <h2>Grey sports tracksuit, excellent quality</h2>
                <span>$150.00</span>
              </div>
              <div class="event"  data-product-id="Clot-M-054">
                <a onclick="addProductToCart(event)">
                  <i class="fas fa-cart-plus" data-text="Add To Cart"></i>
              </a>

              <a onclick="addProductToWishlist(event)">
                  <i class="fas fa-heart" data-text="WatchList"></i>
              </a>
              </div>
            </div>
            <div class="image">
              <a href="details.html?id=Clot-W-066">
                <img src="images/clothing13.jpg" alt="clothing13" />
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

              <a onclick="addProductToWishlist(event)">
                  <i class="fas fa-heart" data-text="WatchList"></i>
              </a>
              </div>
            </div>
          </div>
        </div>
        <!-- End New arrivals -->


</x-layout>
