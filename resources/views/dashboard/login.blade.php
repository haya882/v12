<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ env('APP_NAME')}} - Admin Login</title>
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
      .alert {
        background-color: #ffebee;
        color: #d32f2f;
        padding: 15px;
        margin-bottom: 20px;
        border: 1px solid #ef9a9a;
        border-radius: 4px;
      }
      .alert ul {
        margin: 0;
        padding-left: 20px;
      }
      .alert li {
        margin: 5px 0;
      }
    </style>
  </head>
  <body>
    <div class="admin-login">
      <div class="container">
          <div class="forms-container">
              <div class="signin-signup">

                  <!-- Sign In Form -->
                  <form action="{{ route('admin.authenticate') }}" method="POST" class="sign-in-form">
                      @csrf
                      <h2 class="title">Admin Sign in</h2>

                      @if ($errors->any())
                      <div class="alert">
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                      @endif
                      <div class="input-field login__box">
                          <input type="email" name="email" id="email" value="{{ old('email') }}" required placeholder=" " class="login__input">
                          <label for="email" class="login__label">Email</label>
                          <i class="fa-solid fa-envelope ri-mail-fill login__icon"></i>
                      </div>
                      <div class="login__box">
                        <input type="password" name="password" id="password" required placeholder=" " class="login__input">
                        <label for="password" class="login__label">Password</label>
                        <i class="fas fa-eye-slash login__icon login__password" id="loginPassword"></i>
                      </div>

                     <div class="remember">
                        <label class="custom-control-label" for="remember">
                        <input type="checkbox" name="remember" class="custom-control-input" id="remember">
                            Remember Me </label>
                      <a href="#" class="login__forgot">Forgot your password?</a>
                    </div>
                      <button type="submit" class="login__button">Login</button>

                      <div class="login__social">
                        <p class="login__social-title">Or login with</p>

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
                {{-- Left Panel --}}
               <div class="panel left-panel">

                  <img src="{{ asset('assets/images/undraw_welcome-cats_tw36 (2).svg') }}" class="image" alt="Login Illustration" />

              </div>
          </div>
      </div>
    </div>




    {{-- <script src="{{ asset('assets/js/dashbord.js') }}"></script> --}}
    <script>
      document.addEventListener("DOMContentLoaded", function() {
        const togglePassword = document.getElementById('loginPassword');
        if (togglePassword) {
          togglePassword.addEventListener('click', function () {
            const passwordInput = document.getElementById('password');
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            this.classList.toggle('fa-eye');
            this.classList.toggle('fa-eye-slash');
          });
        }


      });


    </script>
  </body>
</html>
