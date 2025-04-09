<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Details</title>
  <link rel="stylesheet" href="styles.css"> <!-- افترضي هنا ملف التنسيق -->
  <script type="module" src="products.js"></script> <!-- ملف بيانات المنتجات -->
</head>
<body>

  <div class="product-detail">
    <div class="left-side">
      <div class="images">
        <img src="" id="product-image" alt="" />
        <div class="zoom-lens"></div>
      </div>
    </div>
    <div class="main-content">
      <h2 id="product-title"></h2>
      <div class="stars">
        <i class="fas fa-star filled"></i>
        <i class="fas fa-star filled"></i>
        <i class="fas fa-star filled"></i>
        <i class="fas fa-star filled"></i>
        <i class="fas fa-star filled"></i>
        <span class="review-count">(1 Reviews)</span>
      </div>
      <p id="product-description"></p>
      <h3 class="price" id="product-price"></h3>

      <div class="color-options" id="color-options"></div>
      <p>Color: <span id="selected-color">None</span></p>

      <div class="tags">
        <p>Product Code: <span id="product-sku"></span></p>
        <p>Category: <a href="#" id="product-category"></a></p>
      </div>
    </div>
  </div>

  <script type="module">
    import { pages } from './products.js';

    const params = new URLSearchParams(window.location.search);
    const productId = params.get("id");

    let product = null;
    for (const category in pages) {
      const match = pages[category].find(item => item.ProductCode === productId);
      if (match) {
        product = match;
        break;
      }
    }

    if (product) {
      document.getElementById("product-title").textContent = product.title || "No Title";
      document.getElementById("product-image").src = product.img || "";
      document.getElementById("product-image").alt = product.alt || product.title;
      document.getElementById("product-description").textContent = product.longDescription || product.description;
      document.getElementById("product-price").textContent = `$${product.price || 0}`;
      document.getElementById("product-sku").textContent = product.ProductCode;
      document.getElementById("product-category").textContent = product.category || "";
      document.getElementById("product-category").href = `products.html?category=${product.category}`;

      const colorContainer = document.getElementById("color-options");
      if (product.colors && product.colors.length > 0) {
        colorContainer.innerHTML = "";
        product.colors.forEach(color => {
          const div = document.createElement("div");
          div.className = "color-circle";
          div.style.backgroundColor = color;
          div.setAttribute("data-color", color);
          div.addEventListener("click", () => {
            document.getElementById("selected-color").textContent = color;
          });
          colorContainer.appendChild(div);
        });
      }
    } else {
      alert("Product not found!");
    }
  </script>

</body>
</html>
