<x-layout>
  <section class="cart-section">
    <div class="spacial-content">
        <h1>
          My Cart
        </h1>
    </div>
    <div class="container">
      <div class="table-container">
          <table class="table"  id="cart-table">
              <thead>
                  <tr>
                      <th>Image</th>
                      <th>Name Product</th>
                      <th>Price</th>
                      <th>Quantity</th>
                      <th>Subtotal</th>
                      <th>Remove</th>
                  </tr>
              </thead>
              <tbody id="cart-table-body">

              </tbody>
          </table>


      <div class="add">
        <a href="index.html"><button class="shopping-cart">
          <i class="fa-solid fa-shuffle"></i>
          Back To Home
        </button>
      </a>
        <button>
          <a href="products.html"><i class="fas fa-shopping-cart"></i> Continue Shopping
        </button></a>
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
            <div class="city">
            <input

              type="text"
              placeholder="State / Country"
              class="form-input"
              name=""
              id=""

            />
            <i class="fas fa-map-marker-alt form-icon"></i>

          </div>
            <div class="form-group grid">
              <div class="city">
              <input
                type="text"
                placeholder="City"
                class="form-input"
                name=""
                id=""
              />
              <i class="fas fa-flag form-icon"></i>
            </div>

              <input
                type="text"
                placeholder=" PostCode / ZIP"
                class="form-input"
                name=""
                id=""
              />
            </div>

            <div class="city">
              <i class="fas fa-mail-bulk form-icon1"></i>
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
            <td><span id="cart-items-subtotal" class="cart-total-price">$0.00</span></td>
          </tr>
          <tr>
            <td><span class="cart-total-section">Shipping</span></td>
            <td><span id="shipping-cost" class="cart-total-price">$30.00</span></td>
          </tr>
          <tr>
            <td><span class="cart-total-section">Total</span></td>
            <td><span id="cart-total" class="cart-total-price">$0.00</span></td>
          </tr>
        </table>
        <a href="checkout.html" class="add" onclick="saveCartToCheckout()">
          <button class="shopping-cart">
            <i class="fa-solid fa-money-check-dollar"></i>
            Proceed To Checkout
          </button>
        </a>
      </div>

  </div>
</div>
</section>


</x-layout>
