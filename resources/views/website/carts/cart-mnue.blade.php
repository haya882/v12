<i id="cart-icon" class="bi bi-cart3" onclick="toggleCart()">
    <div id="cart-content">
        <span class="badge" id="cart-count">{{ $items->count() }}</span>

        <div class="cart-dropdown">
            <div class="cart-items-container" id="cart-items-container">
                @forelse ($items as $item)
                    <div class="cart-item">
                        <img src="{{ $item->product->img_path }}" alt="{{ $item->product->name }}">
                        <div class="cart-item-details">
                            <div class="cart-item-name">{{ $item->product->name }}</div>
                            <div class="cart-item-price"><span>{{ $item->quantity }} ×</span>{{ number_format($item->price,2) }}</div>
                        </div>
                        <button class="cart-item-remove" onclick="removeFromCart('{{ $item->product->id }}')">×</button>
                    </div>
                @empty
                    <p id="empty-cart-message">No product in the cart</p>
                @endforelse
            </div>
            <div class="cart-subtotal">
                Subtotal: <span id="cart-subtotal">${{ number_format($subtotal, 2) }}</span>
            </div>
            <div class="cart-buttons">
                <a href="{{ route('website.cart.index') }}"><button class="view-cart">View Cart</button></a>
                <a href="{{ route('website.checkout') }}"><button class="checkout">Checkout</button></a>
            </div>
        </div>
    </div>
</i>
