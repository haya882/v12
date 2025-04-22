<i id="wishlist-icon" class="bi bi-heart" onclick="addToWishlist(event)">
    <div id="wishlist-content">
        <span class="badge">{{ $wishlistItems->count() }}</span>
        <div class="wishlist-dropdown">
            <div class="wishlist-items-container" id="wishlist-items-container">
                @forelse($wishlistItems as $item)
                    <div class="wishlist-item">
                        <img src="{{ $item->product->img_path }}" alt="Plain brown shoes">
                        <div class="wishlist-item-details">
                            <div class="wishlist-item-name">{{ $item->product->name }}</div>
                            <div class="wishlist-item-price"> ${{ number_format($item->product->price,2) }}</div>
                        </div>
                        <button class="wishlist-item-remove"
                            onclick="removeFromWishlist({{ $item->product->id }})">×</button>
                    </div>
                @empty
                    <p id="empty-wishlist-message">No product in the Wishlist</p>
                @endforelse
            </div>
            <div class="wishlist-subtotal">Subtotal: <span id="wishlist-subtotal">${{number_format($subtotalWishlist,2) }}</span></div>
            <div class="wishlist-buttons">
                <a href="{{ route('website.wishlist.index') }}"><button class="view-wishlist">View
                        Wishlist</button></a>
                <a href="{{ route('website.cart.index') }}"><button class="view-cart">Go To
                        Cart</button></a>
            </div>
        </div>
    </div>
</i>
