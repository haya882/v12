<x-site>
  <!-- ======== Wishlist Section ======== -->
  <button id="top-btn"><i class="fa-solid fa-arrow-up"></i></button>
  <div class="scroll"></div>

  <section class="cart-section">
      <div class="spacial-content">
          <h1>My Wishlist</h1>
      </div>

      <div class="container">
          <div class="table-container wishlist">
              <table class="table" id="wishlist-table">
                  <thead>
                      <tr>
                          <th>Image</th>
                          <th>Product Name</th>
                          <th>Price</th>
                          <th>Subtotal</th>
                          <th>Remove</th>
                      </tr>
                  </thead>
                  <tbody id="wishlist-body">
                      @forelse ($wishlistItems as $item)
                          <tr>
                              <td>
                                  <img src="{{ asset($item->product->img_path) }}" alt="{{ $item->product->name }}" width="50">
                              </td>
                              <td>{{ $item->product->name }}</td>
                              <td>${{ number_format($item->product->price, 2) }}</td>
                              <td>
                                <div class="add" data-product-id="{{ $item->product->id }}">
                                    <button class="shopping-cart" onclick="addProductToCart(event)">
                                        <i class="fas fa-shopping-cart" aria-hidden="true"></i>
                                        <span class="add-to-cart"> Add to Cart</span>
                                    </button>
                                </div>
                            </td>
                              <td>
                                  <i class="fa-solid fa-trash table-trash"
                                      onclick="removeFromWishlist({{ $item->product->id }})">
                                      
                                  </i>
                              </td>
                          </tr>
                      @empty
                          <tr>
                              <td colspan="5" class="text-center">Your wishlist is empty.</td>
                          </tr>
                      @endforelse
                  </tbody>
              </table>
          </div>

          @if ($wishlistItems->count())
              <div class="wishlist-subtotal text-end mt-3">
                  <strong>Total:</strong>
                  <span id="wishlist-subtotal">
                      ${{ number_format($wishlistItems->sum(fn($item) => $item->product->price), 2) }}
                  </span>
              </div>
          @endif
      </div>
  </section>

  <script src="{{ asset('web/js/popup.js') }}" defer></script>

  
</x-site>
