<x-layout>


<!-- --------==================Start Checkout====================---------- -->
<section class="checkout-section">
    <div class="spacial-content">
        <h1>
          My Checkout
        </h1>
    </div>
    <div class="container grid">
        <div class="checkout-group">
     <h3 class="section-title">Billing Details</h3>
     <form action="" class="form grid">
        <input type="text" name="" id="" placeholder="Name" class="form-input">
        <input type="text" name="" id="" placeholder="Address" class="form-input">
        <input type="text" name="" id="" placeholder="City" class="form-input">
        <input type="text" name="" id="" placeholder="Country" class="form-input">
        <input type="text" name="" id="" placeholder="Postcode" class="form-input">
        <input type="text" name="" id="" placeholder="Phone" class="form-input">
        <input type="email" name="" id="" placeholder="Email" class="form-input">
        <h3 class="checkout-title">Additional Information</h3>
        <textarea name="" id="" placeholder="Order note" cols="30" rows="10" class="form-input textarea"></textarea>

     </form>
        </div>
        <div class="checkout-group">
          <h3 class="section-title">Cart Totals</h3>
          <table class="order-table" id="order-table">
            <tr>
                <th colspan="2">Products</th>
                <th>Total</th>
            </tr>
            <tr>

                  <div id="cart-items-container">
                       <p id="no-product-msg">No Product in The Cart...</p>
                  </div>

          </tr>
              <!-- سيتم إضافة المنتجات هنا عبر جافا سكريبت -->



          </table>



            <div class="payment-method">
            <h3 class="checkout-title payment-title">Payment</h3>
            <div class="payment-option flex">
                <input type="radio" checked class="payment-input">
                <label for="" class="payment-label">Direct Bank Transfer</label>
            </div>
            <div class="payment-option flex">
                <input type="radio" class="payment-input">
                <label for="" class="payment-label">Checked Payment</label>
            </div>
            <div class="payment-option flex">
                <input type="radio"  class="payment-input">
                <label for="" class="payment-label">Paypal</label>
            </div>
            </div>
            <div class="add place">
                <button class="shopping-cart">
                    Place Order
                </button>
            </div>
        </div>
    </div>
</section>






</x-layout>
