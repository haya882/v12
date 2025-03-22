document.addEventListener("DOMContentLoaded", function () {
    // إنشاء عنصر الـ loading وإضافته للصفحة
    let loadingDiv = document.createElement("div");
    loadingDiv.classList.add("loading-spinner");
    loadingDiv.id = "loading";
    loadingDiv.innerHTML = `
        <div class="container">
            <div class="ring"></div>
            <div class="ring"></div>
            <div class="ring"></div>
            <span class="loading2"> Loading...🛍️</span>
        </div>
    `;

    // إضافة الـ loading إلى بداية الصفحة
    document.body.prepend(loadingDiv);

    // عند تحميل الصفحة بالكامل، يتم إخفاء الـ loading
    window.onload = function () {
        loadingDiv.style.display = "none";
    };
});
