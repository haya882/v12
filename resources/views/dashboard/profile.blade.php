<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>-Anywhere</title>
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
    <style>
      .profile-dropdown {
        position: relative;
        display: inline-block;
      }
      
      .dropdown-content {
        display: none;
        position: absolute;
        background-color: var(--color-white);
        min-width: 160px;
        box-shadow: 0 8px 16px rgba(0,0,0,0.2);
        z-index: 1;
        border-radius: 0.5rem;
        overflow: hidden;
      }
      
      .dropdown-content a {
        color: var(--color-dark);
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        transition: all 0.3s ease;
      }
      
      .dropdown-content a:hover {
        background-color: var(--color-background);
      }
      
      .profile-dropdown:hover .dropdown-content {
        display: block;
      }
      
      .dropdown-content i {
        margin-right: 10px;
      }
    </style>

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
              <a href="{{ route('admin.logout') }}" class="menu-item layout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <span class="material-icons-sharp"> logout </span>
                <h3>Logout</h3>
              </a>
              <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
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
              <div class="profile-dropdown">
                <div class="profile">
                  <div class="info">
                    <p>Hey,<b>{{ Auth::user()->name }}</b></p>
                  </div>
                  <div class="profile-photo">
                    <img src="{{ asset('assets/images/team1.jpg') }}" alt="team1" />
                  </div>
                </div>
                <div class="dropdown-content">
                  <a href="{{ route('admin.profile') }}">
                    <i class="material-icons-sharp">person</i> Profile
                  </a>
                  <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="material-icons-sharp">logout</i> Logout
                  </a>
                </div>
              </div>
            </div>
        </div>
      </div>


            <!----------------End of Top  -------------->
        <section class="admin-profile">
            <div class="spacial-content">
                <h1>
                 Profile Page
                </h1>
            </div>
            <div class="container grid">
                <div class="profile-group">
                    <div class="profile-img">
                        <label for="file-upload" class="custom-file-upload">
                            <i class="fas fa-camera"></i>
                        </label>
                        <input id="file-upload" type="file" accept="image/*" style="display: none;" />
                        <img id="profile-image" src="{{ asset('assets/images/team1.jpg') }}" alt="profile image ">
                    </div>
                </div>
                <div class="profile-group ">
                    <form action="" class="form grid">
                        <div class="form-item">
                        <label for="">Name:</label>
                        <input type="text" name="" id="" placeholder="Enter Your Name" class="form-input">
                    </div>
                        <div class="form-item">
                        <label for="">Email:</label>
                        <input type="email" name="" id="" placeholder="Enter Your Email" class="form-input">
                    </div>
                        <h2 class="section-title">Update your password</h2>
                        <div class="form-item">
                            <label for="">Current Password</label>
                            <input type="text" name="" id="" placeholder="Enter Your Password" class="form-input">
                        </div>
                        <div class="form-item">
                            <label for="">New Password:</label>
                            <input type="text" name="" id=""  class="form-input">
                        </div>
                        <div class="form-item">
                            <label for="">Confirm Password:</label>
                            <input type="text" name="" id=""  class="form-input">
                        </div>

                     </form>
                    <div class="add place">
                        <button class="shopping-cart">
                           Update
                        </button>
                    </div>
                </div>


     </section>




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

