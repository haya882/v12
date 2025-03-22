let sideMenu = document.querySelector("aside");
let menuBtn = document.getElementById("menu-btn");
let closeBtn = document.getElementById("closeBtn2");
let themeToggler = document.querySelector(".theme-toggler");

menuBtn.addEventListener('click',() =>{
    sideMenu.style.display ="block"
    
})
closeBtn.addEventListener('click',() =>{
    sideMenu.style.display ="none"
    
})

// change theme
themeToggler.addEventListener('click',() =>{
   document.body.classList.toggle('dark-theme-variables');
   themeToggler.querySelector('span:ntn-child(1)').classList.toggle('active');
   themeToggler.querySelector('span:ntn-child(2)').classList.toggle('active');
})
// fill orders in table
orders.forEach(order => {
    const tr = document.createElement('tr');
    tr.innerHTML = `
        <td>${order.title}</td>
        <td>${order.ProductCode}</td>
        <td>${order.category}</td>
        <td class="warning">${order.price}</td>
        <td class="primary">details</td>
    `;
    document.querySelector('table tbody').appendChild(tr);
});
