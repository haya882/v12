<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{  $title ?? '' }} - {{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <!--Render All Element Normally-->
    <link rel="stylesheet" href="{{ asset('assets/CSS/normalize.css') }}" />
    <!-- Webfont library -->
     <link rel="stylesheet" href="{{ asset('assets/CSS/all.min.css') }}" />
    <!-- Google font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Concert+One&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- google icons link -->
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
      rel="stylesheet"
    />

    <!-- Font Awesome link -->
    <script
      src="https://kit.fontawesome.com/c1a12a9bed.js"
      crossorigin="anonymous"
    ></script>
    <!-- Bootstrap link -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css"
      rel="stylesheet"
    />

  </head>

  <body>
    <div class="dashboard">
      <div class="container">
        <aside>
            <div class="top">
              <div class="logo">
                  <a href="{{ route('website.index') }}">
                <img src="{{ asset('assets/images/logo2.png') }}" alt="logo" /></a>
              </div>
              <div class="close2" id="closeBtn2">
                <i class="fas fa-times"></i>
              </div>
            </div>
            <div class="sidebar2">
              <a href="{{ route('admin.index') }}" class="menu-item  active">
                <span class="material-icons-sharp "> grid_view </span>
                <h3>Dashboard</h3>
              </a>
              <a href="#" class="menu-item ">
                <span class="material-icons-sharp"> sell </span>
                <h3>Categories</h3>
                <i class="fas fa-chevron-right icon"></i>
              </a>
              <ul class="submenu">
                <li><a href="{{ route('admin.categories.index') }}"> <span class="material-icons-sharp"> apps</span> All Category</a></li>
                <li><a href="{{ route('admin.categories.create') }}"> <span class="material-icons-sharp"> library_add </span>Add New Category</a></li>
              </ul>

              <a href="#" class="menu-item ">
                <span class="material-icons-sharp"> favorite </span>
                <h3>Products</h3>
                <i class="fas fa-chevron-right icon"></i>
              </a>
              <ul class="submenu ">
                <li><a href="{{ route('admin.products.index') }}" > <span class="material-icons-sharp">select_all </span>All Product</a></li>
                <li ><a href="{{ route('admin.products.create') }}" > <span class="material-icons-sharp"> add_shopping_cart </span>Add New Product</a></li>
              </ul>

              <a href="{{ route('admin.orders') }}" class="menu-item ">
                <span class="material-icons-sharp"> shopping_cart </span>
                <h3>Orders</h3>
              </a>

              <a href="" class="menu-item ">
                <span class="material-icons-sharp"> attach_money </span>
                <h3>Payments</h3>
              </a>
              <a href="" class="menu-item ">
                <span class="material-icons-sharp"> groups </span>
                <h3>Customers</h3>
              </a>
              <a href="" class="menu-item ">
                <span class="material-icons-sharp"> lock</span>
                <h3>Role</h3>
                <i class="fas fa-chevron-right icon"></i>

              </a>
              <a href="" class="menu-item layout" >
                <span class="material-icons-sharp"> logout </span>
                <h3>Logout</h3>
              </a>
            </div>

          </aside>
        <!-- ------------End of Side -------------------->

        <main>
          <div class="spacial-content">
            <h1> Dashboard</h1>
          </div>
          <div class="date">
            <input type="date" />
          </div>
          <div class="insights">
            <div class="sales">
              <span class="material-icons-sharp"> analytics </span>
              <div class="middle">
                <div class="left">
                  <h3>Total Sales</h3>
                  <h1>$25,024</h1>
                </div>
                <div class="progress">
                  <svg>
                    <circle cx="38" cy="38" r="36"></circle>
                  </svg>
                  <div class="number">
                    <p>81%</p>
                  </div>
                </div>
              </div>
              <small class="text-muted">Last 24 Hours</small>
            </div>
            <!--------------- End Sales ------------------->
            <div class="expenses">
              <span class="material-icons-sharp"> bar_chart </span>
              <div class="middle">
                <div class="left">
                  <h3>Total Expenses</h3>
                  <h1>$14,160</h1>
                </div>
                <div class="progress">
                  <svg>
                    <circle cx="38" cy="38" r="36"></circle>
                  </svg>
                  <div class="number">
                    <p>62%</p>
                  </div>
                </div>
              </div>
              <small class="text-muted">Last 24 Hours</small>
            </div>
            <!--------------- End Expenses ------------------->
            <div class="income">
              <span class="material-icons-sharp"> stacked_line_chart </span>
              <div class="middle">
                <div class="left">
                  <h3>Total Income</h3>
                  <h1>$10,864</h1>
                </div>
                <div class="progress">
                  <svg>
                    <circle cx="38" cy="38" r="36"></circle>
                  </svg>
                  <div class="number">
                    <p>44%</p>
                  </div>
                </div>
              </div>
              <small class="text-muted">Last 24 Hours</small>
            </div>
            <!--------------- End Income ------------------->
          </div>
          <!--------------- End insights ------------------->
          <div class="recent-orders">
            <h2>Resent Orders</h2>
            <table>
                <thead>
                  <tr>
                    <th>Product Name</th>
                    <th>Product Code</th>
                    <th>Category</th>
                    <th>Price</th>
                    <!-- <th>Product Name</th> -->
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Elegant anklet</td>
                    <td>Acc-W-065</td>
                    <td >Accessories</td>
                    <td class="warning">$25.00</td>
                    <td class="primary">Details</td>
                  </tr>
                  <tr>
                    <td>Dress with bow</td>
                    <td>Clot-W-009</td>
                    <td>Clothing</td>
                    <td class="warning">$120.00</td>
                    <td class="primary">Details</td>
                  </tr>
                  <tr>
                    <td>formal bag</td>
                    <td>Hand-M-013</td>
                    <td>HandBag</td>
                    <td class="warning">$77.00</td>
                    <td class="primary">Details</td>
                  </tr>
                  <tr>
                    <td>comfortable shoes</td>
                    <td>Sho-M-016</td>
                    <td>Shoes</td>
                    <td class="warning">$80.00</td>
                    <td class="primary">Details</td>
                  </tr>
                  <tr>
                    <td>Charcoal waterproof eyeliner</td>
                    <td>Make-W-019</td>
                    <td>MakeUp</td>
                    <td class="warning">$45.00</td>
                    <td class="primary">Details</td>
                  </tr>
                  <tr>
                    <td>Black soft dress</td>
                    <td>Clot-W-025</td>
                    <td>Clothing</td>
                    <td class="warning">$180.00</td>
                    <td class="primary">Details</td>
                  </tr>
                  <tr>
                    <td>Good quality sports tracksuit</td>
                    <td>Clot-M-037</td>
                    <td>Clothing</td>
                    <td class="warning">$110.00</td>
                    <td class="primary">Details</td>
                  </tr>

                </tbody>
              </table>
            <a href="#">Show All</a>
          </div>
        </main>
        <!----------------End of Main  -------------->

        <div class="right">
          <div class="top">
            <div class="language">
              <h3>Language</h3>
              <span class="material-icons-sharp"> language </span>
            </div>
            <div class="notification">
              <i class="fa-solid fa-bell"></i>
            </div>
            <button id="menu-btn">
              <span class="material-icons-sharp"> menu </span>
            </button>
            <div class="theme-toggler">
              <span class="material-icons-sharp active"> light_mode </span>
              <span class="material-icons-sharp"> dark_mode </span>
            </div>
            <div class="profile">
              <div class="info">
                <p>Hey,<b>Haya</b></p>
              </div>
              <a href="{{ route('admin.profile') }}">
                <div class="profile-photo">
                  <img src="{{ asset('assets/images/team1.jpg') }}" alt="team1" />
                </div>
              </a>
            </div>
          </div>
          <!----------------End of Top  -------------->
          <div class="recent-updates">
            <h2>Recent Updates</h2>
            <div class="updates">
              <div class="update">
                <div class="profile-photo">
                  <img src="{{ asset('assets/images/team1.jpg') }}" alt="team1" />
                </div>
                <div class="message">
                  <p>
                    <b>Haya Abu Dahi</b> received her order of Night lion tech
                    GPS drone.
                  </p>
                  <small class="text-muted">2 Minutes Ago</small>
                </div>
              </div>

              <div class="update">
                <div class="profile-photo">
                  <img src="{{ asset('assets/images/team1.jpg') }}" alt="team1"/>
                </div>
                <div class="message">
                  <p>
                    <b>Haya Abu Dahi</b> received her order of Night lion tech
                    GPS drone.
                  </p>
                  <small class="text-muted">2 Minutes Ago</small>
                </div>
              </div>

              <div class="update">
                <div class="profile-photo">
                  <img img src="{{ asset('assets/images/team1.jpg') }}" alt="team1" />
                </div>
                <div class="message">
                  <p>
                    <b>Haya Abu Dahi</b> received her order of Night lion tech
                    GPS drone.
                  </p>
                  <small class="text-muted">2 Minutes Ago</small>
                </div>
              </div>
            </div>
          </div>
          <!----------------End of Recent Updates  -------------->
          <div class="sales-analytics">
            <h2>Sales Analytics</h2>
            <div class="item online">
              <div class="icon">
                <span class="material-icons-sharp">shopping_cart</span>
              </div>
              <div class="right">
                <div class="info">
                  <h3>ONLINE ORDERS</h3>
                  <small class="text-muted">Last 24 Hours</small>
                </div>
                <h5 class="success">+39%</h5>
                <h3>3849</h3>
              </div>
            </div>
            <div class="item offline">
              <div class="icon">
                <span class="material-icons-sharp">local_mall</span>
              </div>
              <div class="right">
                <div class="info">
                  <h3>OFFLINE ORDERS</h3>
                  <small class="text-muted">Last 24 Hours</small>
                </div>
                <h5 class="dandger">-17%</h5>
                <h3>1100</h3>
              </div>
            </div>
            <div class="item customers">
              <div class="icon">
                <span class="material-icons-sharp"> person</span>
              </div>
              <div class="right">
                <div class="info">
                  <h3>NEW CUSTOMERS</h3>
                  <small class="text-muted">Last 24 Hours</small>
                </div>
                <h5 class="success">+25%</h5>
                <h3>849</h3>
              </div>
            </div>
            <div class="item add-product">
              <div>
                <span class="material-icons-sharp">add</span>
                <h3>Add Product</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyright copy-dash">
        <div class="container">
          <div class="details">
            <h5>
              <strong>&copy;</strong> Copyright 2025 <a href="#">AnyWhere</a> -
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
    </div>

    <script src="{{ asset('assets/js/dashbord.js') }}"></script>
  </body>
</html>
