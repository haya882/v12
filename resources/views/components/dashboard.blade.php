<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{  $title ?? '' }} - {{ config('app.name') }}</title>

  {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css" rel="stylesheet"> --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>





    <link href="style.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <!--Render All Element Normally-->
    <link rel="stylesheet" href="{{ asset('assets/css/normalize.css') }}" />
    <!-- Webfont library -->
     <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}" />
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
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC') " crossorigin="anonymous"> --}}

    <!-- Bootstrap link -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css"
      rel="stylesheet"
    />


  </head>



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
            <a href="{{ route('admin.index') }}" class="menu-item ">
              <span class="material-icons-sharp "> grid_view </span>
              <h3>Dashboard</h3>
            </a>
            <a href="#" class="menu-item active ">
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
        <!-- ------------Start of Profile-------------------->
        <div class="right profile-item">
            <div class="top">
              <div class="language">
                <h3>Language</h3>
                <span class="material-icons-sharp" >
                  language
                  </span>

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
                  <p>Hey,<b>haya</b></p>
                </div>
              <a href="{{ route('admin.profile') }}">

                <div class="profile-photo">
                  <img src="{{ asset('assets/images/team1.jpg') }}" alt="team1" />
                </div>
              </a>
              </div>
            </div>

        </div>
    </div>



            <!----------------End of Top  -------------->
            <div class="spacial-content" >
                <h1  style="left: 17%;"
             >Dashboard</h1>
            </div>
                <div class="spacial-content" >
                    <h1 style= "top: 10%;
                left: 17%; position: absolute;">{{  $slot }}</h1>
                </div>

                <!-- ------------End of Profile-------------------->


       <div class="copyright copy-dash copy-dash-prof">
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
