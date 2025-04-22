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

setTimeout(() => {
    const toast = document.querySelector('.custom-toast');
    if (toast) {
        toast.style.display = 'none';
    }
}, 5000);


// function clearError(field, baseId = '') {
//     const id = baseId || field.id.split('Input')[0];
//     const errorIcon = document.getElementById(id + 'ErrorIcon');
//     const errorMsg = document.getElementById(id + 'ErrorMsg');
//     const errorText = document.getElementById(id + 'ErrorText');

//     field.style.borderColor = '#ced4da';
//     if (field.style.paddingRight) field.style.paddingRight = '10px';

//     if (errorIcon) errorIcon.style.display = 'none';
//     if (errorMsg) errorMsg.style.display = 'none';
//     if (errorText) errorText.textContent = '';
// }

// // ==================== المعاينة للصورة ======================

// function handleImagePreview(inputId, previewId) {
//     const input = document.getElementById(inputId);
//     const preview = document.getElementById(previewId);

//     input.addEventListener('change', function () {
//         clearError(this);
//         const file = this.files[0];
//         if (file) {
//             const reader = new FileReader();
//             reader.onload = function (e) {
//                 preview.src = e.target.result;
//                 preview.style.display = 'block';
//             };
//             reader.readAsDataURL(file);
//         } else {
//             preview.src = '';
//             preview.style.display = 'none';
//         }
//     });
// }

// // ==================== تفعيل كل فورم ======================

// function setupFormValidation({ formId, buttonId, fields, customMessages = {}, previewFields = {} }) {
//     const form = document.getElementById(formId);
//     const submitBtn = document.getElementById(buttonId);

//     // تفعيل الاستماع على كل حقل
//     fields.forEach(id => {
//         const field = document.getElementById(id);
//         const eventType = field.type === 'file' ? 'change' : (field.tagName === 'SELECT' ? 'change' : 'input');
//         field.addEventListener(eventType, () => clearError(field));
//     });

//     // تفعيل معاينة الصور
//     for (const [inputId, previewId] of Object.entries(previewFields)) {
//         handleImagePreview(inputId, previewId);
//     }

//     // التحقق عند الإرسال
//     submitBtn.addEventListener('click', function (e) {
//         e.preventDefault();
//         let isValid = true;
//         fields.forEach(id => {
//             const field = document.getElementById(id);
//             if (!field) {
//                 console.warn(`Field with id "${id}" not found`);
//                 return;
//             }

//             const baseId = id.replace('Input', '');
//             const errorIcon = document.getElementById(baseId + 'ErrorIcon');
//             const errorMsg = document.getElementById(baseId + 'ErrorMsg');
//             const errorText = document.getElementById(baseId + 'ErrorText');

//             let isEmpty = false;
//             if (field.type === 'file') {
//                 isEmpty = field.files.length === 0;
//             } else if (field.tagName === 'SELECT') {
//                 isEmpty = field.value === '';
//             } else {
//                 isEmpty = field.value.trim() === '' || parseFloat(field.value) <= 0;
//             }

//             if (isEmpty) {
//                 field.style.borderColor = '#ff0000';
//                 if (errorIcon) errorIcon.style.display = 'block';
//                 if (errorMsg) errorMsg.style.display = 'block';

//                 const defaultMsg = `${baseId.charAt(0).toUpperCase() + baseId.slice(1)} is required;`
//                 if (errorText) errorText.textContent = customMessages[baseId] || defaultMsg;

//                 isValid = false;
//             } else {
//                 field.style.borderColor = '#ced4da';
//                 if (errorIcon) errorIcon.style.display = 'none';
//                 if (errorMsg) errorMsg.style.display = 'none';
//             }
//         });

//         if (isValid) form.submit();
//     });
// }

// // ====================================================================

// document.addEventListener("DOMContentLoaded", function () {
//     setupFormValidation

// });

