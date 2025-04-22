let currentPage = 1; // Current page number
const itemsPerPage = 6; // Number of items per page
let totalItems = 0; // Total number of items (to be set from server response)

function fetchProducts(page) {
    // Fetch products from your server (adjust URL as needed)
    fetch(`/api/products?page=${page}`)
        .then(response => response.json())
        .then(data => {
            totalItems = data.total; // Assuming your API returns total items
            renderProducts(data.products); // Render products on the page
            renderPagination();
        })
        .catch(error => console.error('Error fetching products:', error));
}

function renderProducts(products) {
    const productContainer = document.getElementById('product-container'); // Assuming this is your product display area
    productContainer.innerHTML = ''; // Clear existing products

    products.forEach(product => {
        const productDiv = `
            <div class="image">
                <img src="${product.img_path}" alt="${product.name}" />
                <div class="content">
                    <a href="#">${product.category}</a>
                    <h2>${product.name}</h2>
                    <span>${product.price}$</span>
                </div>
                <div class="event">
                    <a href="#"><i class="fas fa-cart-plus" data-text="Add To Cart"></i></a>
                    <a href="#"><i class="fas fa-heart" data-text="WatchList"></i></a>
                </div>
                ${product.discount ? `<div class="discount">-${product.discount}%</div>` : ''}
            </div>
        `;
        productContainer.innerHTML += productDiv; // Add each product to the container
    });
}

function renderPagination() {
    const paginationNumbers = document.getElementById('pagination-numbers');
    paginationNumbers.innerHTML = ''; // Clear existing pagination numbers

    const totalPages = Math.ceil(totalItems / itemsPerPage);
    
    for (let i = 1; i <= totalPages; i++) {
        const pageButton = document.createElement('button');
        pageButton.innerText = i;
        pageButton.onclick = () => {
            currentPage = i;
            fetchProducts(currentPage);
        };
        paginationNumbers.appendChild(pageButton);
    }

    // Disable Prev button if on the first page
    document.getElementById('prev-btn').disabled = currentPage === 1;
    // Disable Next button if on the last page
    document.getElementById('next-btn').disabled = currentPage === totalPages;
}

function prevPage() {
    if (currentPage > 1) {
        currentPage--;
        fetchProducts(currentPage);
    }
}

function nextPage() {
    debugger;
    const totalPages = Math.ceil(totalItems / itemsPerPage);
    if (currentPage < totalPages) {
        currentPage++;
        fetchProducts(currentPage);
    }
}

// Initial fetch
fetchProducts(currentPage);
