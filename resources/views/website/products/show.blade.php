  <x-site>
      <!-- End Header -->
      <div class="content-products" data-aos="fade-up" data-aos-duration="2000">
          <div class="container">
              <div class="left-side">
                  <div class="images">
                      <img src="{{ $product->img_path }}" height="100%" id="product-image" alt="{{ $product->name }}">
                      <div class="zoom-lens"
                          style="left: 305.5px; top: 126px; background-image: url(&quot;{{ $product->image_path }}&quot;); background-position: 88.3317% 44.9513%; display: none;">
                      </div>
                  </div>
                  <div class="main-content">
                      <h2 id="product-title">{{ $product->name }}</h2>
                      <div class="stars">
                        @for ($i = 1; $i <= 5; $i++)
                            <i class="fas fa-star {{ $product->reviews->avg('star') >= $i ? 'filled' : '' }}" aria-hidden="true"></i>
                        @endfor
                    
                        <span class="review-count">({{ $product->reviews->count() }} Reviews)</span>
                    </div>
                    
                      <p id="product-description">
                          {{ $product->description }}
                      </p>
                      <h3 class="price" id="product-price">${{ number_format($product->price, 2) }}</h3>
                     
                      {{-- <div class="counter" data-product-id="{{ $product->id }}">
                          <button class="decrement" id="decrement-{{ $product->id }}">-</button>
                          <input type="number" class="counterValue" id="counterValue-{{ $product->id }}"
                              value="1" min="1">
                          <button class="increment" id="increment-{{ $product->id }}">+</button>
                      </div> --}}

                      <div class="add">
                          <button class="shopping-cart add-cart-details" data-product-id="{{ $product->id }}"
                              onclick="addProductToCart(event)">
                              <i class="fas fa-shopping-cart"></i>
                              <span class="add-to-cart"> Add to Cart</span>
                              <span class="added"> ADDED :)</span>
                              <i class="fas fa-shopping-cart"></i>
                              <i class="fas fa-box"></i>
                          </button>

                          <button class="wishlist-button add-cart-details" data-product-id="{{ $product->id }}"
                              onclick="addProductToWishlist(event)">
                              <i class="fas fa-heart"></i> Add to Wishlist
                          </button>
                      </div>

                      <div id="products-container"></div>
                      <div class="tags">
                          <p>Category: <a href="">{{ $product->role->name }}</a></p>
                      </div>
                  </div>
                  <div class="product-container">
                      <div class="tabs">
                          <button class="tab-button" onclick="showTab('description')">
                              DESCRIPTION
                          </button>
                          <button class="tab-button active" onclick="showTab('reviews')">
                              REVIEWS (1)
                          </button>
                      </div>
                      <div id="description" class="tab-content active" style="display: none;">
                          <p>
                              {{ $product->description }}
                          </p>
                      </div>
                      <div id="reviews" class="tab-content" style="display: block;">
                          <p>There are no reviews yet.</p>
                          <p>Be the first to review ..</p>
                          <form class="review-form" action="{{ route('website.products.storeReviews', $product->id) }}"
                              method="POST">
                              @csrf
                              <input type="hidden" name="product_id" value="{{ $product->id }}">
                              <label for="star">Your rating :</label>
                              <div class="rating" id="strar">
                                  @for ($i = 1; $i <= 5; $i++)
                                      <div class="group" data-value="{{ $i }}"
                                          onclick="setRating({{ $i }})">
                                          @for ($j = 1; $j <= $i; $j++)
                                              <span class="star">★</span>
                                          @endfor
                                      </div>
                                  @endfor
                              </div>
                              <input type="hidden" name="star" id="rating-value" value="{{ old('star') }}">



                              <label for="comment">Your review:</label>
                              <textarea id="comment" name="comment" class="form-input" required>{{ old('comment') }}</textarea>

                              <button type="submit">Submit</button>
                          </form>
                      </div>
                  </div>
              </div>
              <div class="right-side">
                  <div class="best-sellers">
                      <h3>Best Sellers</h3>
                      @foreach ($bestSellers as $bestSeller)
                          <div class="product">
                              <a href="{{ route('website.products.show', $product->id) }}">
                                  <img src="{{ $bestSeller->img_path }}" alt="{{ $bestSeller->name }}" />
                              </a>
                              <div class="info">
                                  <p>{{ $bestSeller->name }}</p>
                                  <div class="stars">
                                      @for ($i = 0; $i < 5; $i++)
                                          <i
                                              class="fas fa-star{{ $i < $bestSeller->average_rating ? ' filled' : '' }}"></i>
                                      @endfor
                                  </div>
                                  <div class="price">${{ number_format($bestSeller->price, 2) }}</div>
                              </div>
                          </div>
                      @endforeach
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
              @foreach ($newProducts as $product)
                  <div class="image">
                      <a href="{{ route('website.products.show', $product->id) }}">
                          <img src="{{ $product->img_path }}" alt="{{ $product->name }}" /></a>
                      <div class="content">
                          <a href="products.html?category=Clothing">{{ $product->role->name }}</a>
                          <h2>{{ $product->description }}</h2>
                          <span>${{ number_format($product->price, 2) }}</span>
                      </div>
                      <div class="event" data-product-id="{{ $product->id }}">
                          <a onclick="addProductToCart(event)">
                              <i class="fas fa-cart-plus" data-text="Add To Cart" aria-hidden="true"></i>
                          </a>
                          <a onclick="addProductToWishlist(event)" data-product-id="{{ $product->id }}">
                              <i class="fas fa-heart" data-text="WatchList"></i>
                          </a>
                      </div>
                  </div>
              @endforeach
          </div>
      </div>
      <!-- End New arrivals -->
      @push('scripts')
          <script>
              window.addEventListener("load", function() {

                  toastr.options = {
                      "closeButton": true,
                      "progressBar": true,
                      "positionClass": "toast-bottom-right",
                      "timeOut": "3000",
                  };

                  @if (session('success'))
                      toastr.success("{{ session('success') }}");
                  @endif

                  @if (session('error'))
                      toastr.error("{{ session('error') }}");
                  @endif

                  @if (session('info'))
                      toastr.info("{{ session('info') }}");
                  @endif

                  @if (session('warning'))
                      toastr.warning("{{ session('warning') }}");
                  @endif
              });
              document.addEventListener("DOMContentLoaded", function() {
                  const groups = document.querySelectorAll(".group");

                  groups.forEach((group) => {
                      group.addEventListener("click", () => {
                          groups.forEach((g) => g.classList.remove("active"));
                          group.classList.add("active");

                          // Set selected rating to a hidden input (if exists)
                          const ratingInput = document.getElementById("rating-value");
                          if (ratingInput) {
                              ratingInput.value = group.getAttribute("data-value");
                          }
                      });
                  });
              });

              document.addEventListener("DOMContentLoaded", function() {
                  document.querySelectorAll('.counter').forEach(counter => {
                      const productId = counter.getAttribute('data-product-id');
                      const decrementBtn = document.getElementById(`decrement-${productId}`);
                      const incrementBtn = document.getElementById(`increment-${productId}`);
                      const input = document.getElementById(`counterValue-${productId}`);

                      decrementBtn.addEventListener('click', () => {
                          let value = parseInt(input.value);
                          if (value > 1) {
                              input.value = value - 1;
                              updateQuantity(productId, value - 1);
                          }
                      });

                      incrementBtn.addEventListener('click', () => {
                          let value = parseInt(input.value);
                          input.value = value + 1;
                          updateQuantity(productId, value + 1);
                      });
                  });


              });
          </script>
      @endpush
  </x-site>
