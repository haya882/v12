$(document).ready(function () {

    toastr.options = {
        "closeButton": true,
        "progressBar": true,
        "positionClass": "toast-bottom-right",
        "timeOut": "3000",
    };

    window.addProductToCart = function (event) {
        event.preventDefault();
    
        if (!IS_LOGGED_IN) {
            toastr.warning("يرجى تسجيل الدخول لإضافة المنتج إلى السلة.");
            setTimeout(() => window.location.href = APP_ROUTES.login, 1500);
            return;
        }
    
        const productId = $(event.currentTarget).closest('.event ,.add, .add-cart-details').data('product-id');
    
        $.ajax({
            url: APP_ROUTES.cartAdd,
            type: 'POST',
            data: {
                _token: $('meta[name="csrf-token"]').attr('content'),
                product_id: productId
            },
            success: function (response) {
                // Only reload the cart content, not the full page
                $("#cart-content").load(window.location.href + " #cart-content");
                toastr.success(response.message || "تمت الإضافة إلى السلة.");
            },
            error: function (xhr) {
                if (xhr.status === 401) {
                    toastr.warning("يرجى تسجيل الدخول.");
                    setTimeout(() => window.location.href = APP_ROUTES.login, 1500);
                } else {
                    toastr.error("حدث خطأ أثناء الإضافة إلى السلة.");
                }
            }
        });
    };
    
    window.addProductToWishlist = function (event) {
        event.preventDefault();

        if (!IS_LOGGED_IN) {
            toastr.warning("يرجى تسجيل الدخول لإضافة المنتج إلى المفضلة.");
            setTimeout(() => window.location.href = APP_ROUTES.login, 1500);
            return;
        }

        const productId = $(event.currentTarget).data('product-id');

        $.ajax({
            url: APP_ROUTES.wishlistAdd,
            type: 'POST',
            data: {
                _token: $('meta[name="csrf-token"]').attr('content'),
                product_id: productId
            },
            success: function (response) {
                    $("#wishlist-content").load(window.location.href + " #wishlist-content");

                    toastr.success(response.message ||"تمت الإضافة إلى المفضلة.");
                
            },
            error: function (xhr) {
                if (xhr.status === 401) {
                    toastr.warning("يرجى تسجيل الدخول.");
                    setTimeout(() => window.location.href = APP_ROUTES.login, 1500);
                } else {
                    toastr.error("حدث خطأ أثناء معالجة الطلب.");
                }
            }
        });
    };
    window.removeFromWishlist = function (itemId) {
        $.ajax({
            url: APP_ROUTES.wishlistRemove,
            type: 'POST',
            data: {
                _token: $('meta[name="csrf-token"]').attr('content'),
                product_id: itemId
            },
            success: function (response) {
                $("#wishlist-content").load(window.location.href + " #wishlist-content");
                $('#wishlist-table').load(window.location.href + ' #wishlist-table');

                toastr.success(response.message || "تمت إزالة المنتج من المفضلة.");
            },
            error: function () {
                toastr.error("حدث خطأ أثناء إزالة المنتج من المفضلة.");
            }
        });
    };
   
    window.removeFromCart = function (itemId) {
        $.ajax({
            url: APP_ROUTES.cartRemove,
            type: 'POST',
            data: {
                _token: $('meta[name="csrf-token"]').attr('content'),
                product_id: itemId
            },
            success: function (response) {
                $("#cart-content").load(window.location.href + " #cart-content");
                $('#cart-table').load(window.location.href + ' #cart-table');

                toastr.success(response.message || "تمت إزالة المنتج من السلة.");
            },
            error: function () {
                toastr.error("حدث خطأ أثناء إزالة المنتج من السلة.");
            }
        });
    };

    window.updateQuantity = function (productId, change) {
        $.ajax({
            url: APP_ROUTES.cartUpdate,
            type: 'POST',
            data: {
                _token: $('meta[name="csrf-token"]').attr('content'),
                product_id: productId,
                change: change
            },
            success: function (response) {
                // Reload cart icon
                $('#cart-content').load(window.location.href + ' #cart-content');
                $('#cart-table').load(window.location.href + ' #cart-table');

                

                toastr.success(response.message || "تم تحديث الكمية.");
            },
            error: function () {
                toastr.error("حدث خطأ أثناء تحديث الكمية.");
            }
        });
    };


    window.showTab = function(tabId) {
        // إزالة الـ active من جميع الأزرار
        document.querySelectorAll(".tab-button").forEach((button) => {
          button.classList.remove("active");
        });
      
         
        event.target.classList.add("active");
        
        document.querySelectorAll(".tab-content").forEach((content) => {
          content.style.display = "none"; // إخفاء جميع المحتويات
        });
      
        document.getElementById(tabId).style.display = "block"; // إظهار المحتوى المختار
      };
      

      
});
