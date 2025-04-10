// window.addEventListener('DOMContentLoaded', () => {
    // document.getElementById('file-upload').addEventListener('change', function(e) {
        // const file = e.target.files[0];
        // if (file) {
            // const reader = new FileReader();
            // reader.onload = function(event) {
                // document.getElementById('profile-image').src = event.target.result;
            // };
            // reader.readAsDataURL(file);
        // }
    // });
    // });
window.addEventListener('DOMContentLoaded', () => {
    const sideMenu = document.querySelector("aside");
    const menuBtn = document.getElementById("menu-btn");
    const closeBtn = document.getElementById("closeBtn2");

    if (menuBtn && closeBtn && sideMenu) {
        menuBtn.addEventListener('click', () => {
            sideMenu.style.left = "0"; // إظهار القائمة
            sideMenu.style.opacity = "1";
        });

        closeBtn.addEventListener('click', () => {
            sideMenu.style.left = "-100%"; // إخفاء القائمة
            sideMenu.style.opacity = "0";
        });
    }
});



    // ======= Theme Toggler =======
    const themeToggler = document.querySelector(".theme-toggler");

    if (themeToggler) {
        themeToggler.addEventListener('click', () => {
            document.body.classList.toggle('dark-theme-variables');
            themeToggler.querySelector('span:nth-child(1)').classList.toggle('active');
            themeToggler.querySelector('span:nth-child(2)').classList.toggle('active');
        });
    }

    // ======= Toggle between Login & Sign Up =======
    const signInBtn = document.getElementById('sign-in-btn');
    const signUpBtn = document.getElementById('sign-up-btn');
    const container = document.querySelector('.container');

    if (signInBtn && signUpBtn && container) {
        signUpBtn.addEventListener('click', () => {
            container.classList.add('sign-up-mode');
        });

        signInBtn.addEventListener('click', () => {
            container.classList.remove('sign-up-mode');
        });
    }


    // ======= Password visibility toggle =======
    const passwordAccess = (loginPass, loginEye) => {
        const input = document.getElementById(loginPass);
        const iconEye = document.getElementById(loginEye);

        if (input && iconEye) {
            iconEye.addEventListener('click', () => {
                input.type = input.type === 'password' ? 'text' : 'password';
                iconEye.classList.toggle('fa-eye');
                iconEye.classList.toggle('fa-eye-slash');
            });
        }
    };

    passwordAccess('password', 'loginPassword');
    passwordAccess('signupPassword', 'signupEye');


// fill orders in table
// orders.forEach(order => {
//     const tr = document.createElement('tr');
//     tr.innerHTML = `
//         <td>${order.title}</td>
//         <td>${order.ProductCode}</td>
//         <td>${order.category}</td>
//         <td class="warning">${order.price}</td>
//         <td class="primary">details</td>
//     `;
//     document.querySelector('table tbody').appendChild(tr);
// });
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





