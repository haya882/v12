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
          <!-- ============delivery============== -->

<!-- ====================================               -->

          <div class="payment-method">
            <h3 class="checkout-title payment-title">Payment</h3>
            <div class="payment-option flex">
              <input type="radio" name="payment" class="payment-input">
              <label for="" class="payment-label">Direct Bank Transfer</label>
            </div>
            <div class="payment-option flex">
              <input type="radio" name="payment" class="payment-input">
              <label for="" class="payment-label">Checked Payment</label>
            </div>
            <div class="payment-option flex">
              <input type="radio" name="payment" checked  class="payment-input">
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

                 <!-- ===== Start Delivery Section ===== -->
<div class="delivery-section">
<div class="spacial-content" style="position: relative;   bottom: 117px;">
<h1><span></span><span></span><span></span><span></span></h1>
</div>
<div class="container">

<h3 class="section-title">Delivery Option</h3>

<div class="delivery-option flex">
<input type="radio" name="delivery" id="home-delivery" value="home" checked>
<label for="home-delivery">Home Delivery</label>
</div>
<div class="delivery-option flex">
<input type="radio" name="delivery" id="pickup" value="pickup">
<label for="pickup">Pickup from Store</label>
</div>

<div id="address-section" class="input-group">
<label for="address">Enter Delivery Address:</label>
<input type="text" id="address" placeholder="Enter your address" class="form-input">
<button type="button" onclick="getLocation()" class="location-btn">Use Current Location</button>
</div>

<div class="add confirm">
<button type="button" onclick="submitOrder()" class="shopping-cart">Confirm Order</button>
</div>

<p id="output" class="output-message"></p>
</div>
</div>
<!-- ===== End Delivery Section ===== -->
</section>
   <!-- Start Footer -->
   <div class="footer" id="footer"data-aos="fade-up" data-aos-duration="2000">
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
              <a href="mailto:shathadogh872@gmail.com"
                >shathadogh872@gmail.com</a
              >
            </p>
          </div>
        </div>
        <div class="content">
          <i class="fa fa-link"></i>
          <div class="details">
            <h4>Website:</h4>
            <p><a href="http://127.0.0.1:5501/index.html" target="_blank">http://127.0.0.1:5501/index.html</a></p>
          </div>
        </div>
      </div>
      <div class="column">
        <h3 id="info">Information</h3>
        <ul class="information">
          <li>
            <i class="fa fa-chevron-right"></i>
            <i class="fa fa-chevron-right"></i>
            <a href="https://github.com/Shatha492002" target="_blank"> My Account</a>
          </li>
          <li>
            <i class="fa fa-chevron-right"></i>
            <i class="fa fa-chevron-right"></i>
            <a href="wishlist.html" target="_blank"> My Wishlist</a>
          </li>
          <li>
            <i class="fa fa-chevron-right"></i>
            <i class="fa fa-chevron-right"></i>
            <a href="products.html" target="_blank"> Shopping</a>
          </li>
          <li>
            <i class="fa fa-chevron-right"></i>
            <i class="fa fa-chevron-right" target="_blank"></i><a href="about.html"> About Us</a>
          </li>
          <li>
            <i class="fa fa-chevron-right"></i>
            <i class="fa fa-chevron-right"></i
            ><a href="cart.html" target="_blank"> My Cart</a>
          </li>
          <li>
            <i class="fa fa-chevron-right"></i>
            <i class="fa fa-chevron-right"></i>
            <a href="checkout.html" target="_blank"> My Checkout</a>
          </li>
        </ul>
      </div>
      <div class="column">
        <h3 id="info">Follow Us</h3>
        <ul class="follow">
          <li>
            <i class="fa fa-chevron-right"></i>
            <i class="fa fa-chevron-right"></i>
            <a href="https://www.facebook.com/share/161bfAfvt4/" target="_blank"> Facebook</a>
          </li>
          <li>
            <i class="fa fa-chevron-right"></i>
            <i class="fa fa-chevron-right"></i>
            <a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox" target="_blank"> Google+</a>
          </li>
          <li>
            <i class="fa fa-chevron-right"></i>
            <i class="fa fa-chevron-right"></i><a href="https://www.youtube.com/@shatham.d.7816" target="_blank"> YouTube</a>
          </li>
          <li>
            <i class="fa fa-chevron-right"></i>
            <i class="fa fa-chevron-right"></i>
            <a href="https://x.com/Shatha72401840?t=0D6VaDRh-zZ1hF4LdM5J3w&s=35"target="_blank" > Twitter</a>
          </li>
          <li>
            <i class="fa fa-chevron-right"></i>
            <i class="fa fa-chevron-right"></i>
            <a href="https://www.instagram.com/sh_m_d49?igsh=MTVhZTN4eHE5YTk2aw==" target="_blank">Instagram</a>
          </li>
          <li>
            <i class="fa fa-chevron-right"></i>
            <i class="fa fa-chevron-right"></i>
            <a href="https://www.pinterest.com/shathadogh872/" target="_blank">Pinterest</a>
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
          <strong>&copy;</strong> Copyright 2025 <a href="index.html">AnyWhere</a> -
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

  <div id="popup" class="delivery-popup">
    <p id="popup-message"></p>
  </div>

<script>
    //  <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<

document.querySelectorAll('input[name="delivery"]').forEach((radio) => {
  radio.addEventListener('change', function () {
    document.getElementById('address-section').style.display =
      this.value === 'home' ? 'block' : 'none';
  });
});

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function (position) {
      const lat = position.coords.latitude.toFixed(5);
      const lng = position.coords.longitude.toFixed(5);
      document.getElementById('address').value = `Lat: ${lat}, Lng: ${lng}`;
    }, function () {
      alert("Unable to retrieve your location.");
    });
  } else {
    alert("Geolocation is not supported by this browser.");
  }
}

function showPopup(message, success = true) {
  const popup = document.getElementById('popup');
  const messageEl = document.getElementById('popup-message');

  popup.style.backgroundColor = success ? '#28a745' : '#dc3545';
  messageEl.textContent = message;

  popup.classList.add('show');

  setTimeout(() => {
    popup.classList.remove('show');
  }, 3000);
}

  function submitOrder() {
    const deliveryType = document.querySelector('input[name="delivery"]:checked').value;
    if (deliveryType === 'home') {
      const address = document.getElementById('address').value.trim();
      if (!address) {
        showPopup('Please enter your delivery address.', false);
        return;
      }
      showPopup(`Order confirmed! Delivery to: ${address}`);
    } else {
      showPopup("Order confirmed! Please pick it up from the store.");
    }
  }


</script>
</x-layout>
