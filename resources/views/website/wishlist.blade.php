<x-layout>
<!-- --------==================Start Wishlist====================---------- -->
<!-- End Header -->
<button id="top-btn"><i class="fa-solid fa-arrow-up"></i></button>
<div class="scroll"></div>
<!-- --------==================Start Wishlist====================---------- -->
<section class="cart-section">
    <div class="spacial-content">
        <h1>
          My Wishlist
        </h1>
    </div>
  <div class="container">
    <div class="table-container wishlist">
      <table class="table">
        <tr>
          <th>Image</th>
          <th>Name Product</th>
          <th>Price</th>
          <th>Stock Statues</th>
          <th>Subtotal</th>
          <th>Remove</th>
        </tr>
         <tbody id="wishlist-body">

         </tbody>

      </table>

  </div>
</div>
</section>

<script src="{{ asset('web/js/popup.js') }}" defer></script>




</x-layout>
