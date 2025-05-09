<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ env('APP_NAME')}} - Admin Signup</title>
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
    <div class="admin-login">
      <div class="container">
          <div class="forms-container">
              <div class="signin-signup">
                  <!-- Sign Up Form -->
                  <form action="{{ route('admin.register') }}" method="POST" class="sign-up-form login__form">
                      @csrf
                      <h2 class="title">Admin Sign up</h2>

                      @if ($errors->any())
                      <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                      @endif

                      <div class="login__content grid">
                          <div class="login__box">
                              <input type="text" id="name" name="name" value="{{ old('name') }}" required placeholder=" " class="login__input">
                              <label for="name" class="login__label">Name</label>
                              <i class="fa-solid fa-user login__icon"></i>
                          </div>

                          <div class="login__box">
                              <input type="email" id="email" name="email" value="{{ old('email') }}" required placeholder=" " class="login__input">
                              <label for="email" class="login__label">Email</label>
                              <i class="fa-solid fa-envelope ri-mail-fill login__icon"></i>
                          </div>
                          
                          <div class="login__box">
                            <input type="password" id="password" name="password" required placeholder=" " class="login__input">
                            <label for="password" class="login__label">Password</label>
                            <i class="eye-icon fas fa-eye-slash login__icon login__password" id="signupEye"></i>
                         </div>
                         
                         <div class="login__box">
                            <input type="password" id="password_confirmation" name="password_confirmation" required placeholder=" " class="login__input">
                            <label for="password_confirmation" class="login__label">Confirm Password</label>
                            <i class="eye-icon fas fa-eye-slash login__icon login__password" id="signupEyeConfirm"></i>
                         </div>
                      </div>

                      <button type="submit" class="login__button">Sign Up</button>

                      <div class="login__social">
                        <p class="login__social-title">Or sign up with</p>

                        <div class="login__social-links">
                           <a href="#" class="login__social-link">
                              <img src="{{ asset('assets/images/icon-google.svg') }}" alt="image" class="login__social-img">
                           </a>

                           <a href="#" class="login__social-link">
                              <img src="{{ asset('assets/images/icon-facebook.svg') }}" alt="image" class="login__social-img">
                           </a>

                           <a href="#" class="login__social-link">
                              <img src="{{ asset('assets/images/icon-apple.svg') }}" alt="image" class="login__social-img">
                           </a>
                        </div>
                     </div>
                  </form>
              </div>
          </div>

          <!-- Panels Container -->
          <div class="panels-container">
              <!-- Left Panel -->
              <div class="panel left-panel">
                  <div class="content">
                      <h3>Already have an account?</h3>
                      <p>Sign in to access the admin dashboard and manage your website.</p>
                      <a href="{{ route('admin.login') }}" class="btn transparent">Sign in</a>
                  </div>
                  <img src="{{ asset('assets/images/log.svg') }}" class="image" alt="Login Illustration" />
              </div>
          </div>
      </div>
  </div>

    <script src="{{ asset('assets/js/dashbord.js') }}"></script>
    <script>
        // Toggle password visibility
        document.getElementById('signupEye').addEventListener('click', function() {
            const passwordInput = document.getElementById('password');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                this.classList.remove('fa-eye-slash');
                this.classList.add('fa-eye');
            } else {
                passwordInput.type = 'password';
                this.classList.remove('fa-eye');
                this.classList.add('fa-eye-slash');
            }
        });
        
        document.getElementById('signupEyeConfirm').addEventListener('click', function() {
            const passwordInput = document.getElementById('password_confirmation');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                this.classList.remove('fa-eye-slash');
                this.classList.add('fa-eye');
            } else {
                passwordInput.type = 'password';
                this.classList.remove('fa-eye');
                this.classList.add('fa-eye-slash');
            }
        });
    </script>
  </body>
</html> 