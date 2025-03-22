const orders = [{
  
    category: "Accessories",
    title: "Elegant leather watch",
    price: "$120.00",
    ProductCode: "Acc-M-053",
 
  },
  {

    category: "Clothing",
    title: "Grey sports tracksuit ",
    price: "$150.00",
    ProductCode: "Clot-M-054",
    
  },
  {
    
    category: "HandBag",
    title: "Large size luxury leather bag",
    price: "$65.00",
    ProductCode: "Hand-M-055",
     
  },
  {
    category: "Accessories",
    title: "Elegant ring",
    price: "$25.00",
    ProductCode: "Acc-M-056",
     
  },
  {
     
    category: "MakeUp",
    title: "Colorful eyeshadow palette",
    price: "$40.00",
    ProductCode: "Make-W-057",
  },
  {
 
    category: "Shoes",
    title: "Comfortable low heel shoe",
    price: "$75.00",
    ProductCode: "Sho-W-058",
  
  }];

  document.querySelectorAll(".menu-item").forEach((item) => {
    item.addEventListener("click", function (e) {
        // إذا تم الضغط على الأيقونة (السهم)، نمنع الانتشار ونوقف الحدث
        if (e.target.closest(".icon")) {
            e.stopPropagation();
            return;
        }

        // إزالة active من الكل ثم إضافة للعنصر الحالي
        document.querySelectorAll(".menu-item").forEach((el) => {
            el.classList.remove("active");
        });
        this.classList.add("active");

        // التحقق إذا فيه سب منيو بعد العنصر
        let submenu = this.nextElementSibling;
        let icon = this.querySelector(".icon");

        if (submenu && submenu.classList.contains("submenu")) {
            // في حالة وجود سب منيو، منع الانتقال وتطبيق منطق الفتح والإغلاق
            e.preventDefault();

            if (submenu.classList.contains("open")) {
                submenu.classList.remove("open");
                icon.classList.remove("rotate");
            } else {
                // إغلاق أي سب منيو مفتوح قبل فتح الجديد
                document.querySelectorAll(".submenu.open").forEach((sub) => {
                    sub.classList.remove("open");
                });

                document.querySelectorAll(".icon.rotate").forEach((ic) => {
                    ic.classList.remove("rotate");
                });

                submenu.classList.add("open");
                icon.classList.add("rotate");
            }
        }
    });
});

  
  
  
  
  
  
