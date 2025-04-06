<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ env('APP_NAME')}}</title>
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

                  <!-- Sign In Form -->
                  <form action="#" class="sign-in-form">
                      <h2 class="title">Sign in</h2>
                      <div class="input-field login__box">
                          <input type="email" name="email" id="email"  required placeholder=" " class="login__input">
                          <label for="email" class="login__label">Email</label>
                          <i class="fa-solid fa-envelope ri-mail-fill login__icon"></i>
                      </div>

                      <div class="login__box">
                        <input type="password" name="password" id="password" required placeholder=" " class="login__input">
                        <label for="password" class="login__label">Password</label>

                        <i class="eye-icon fas fa-eye-slash login__icon login__password" id="loginPassword"></i>
                     </div>
                     <div class="remember">
                        <label class="custom-control-label" for="customCheck">
                        <input type="checkbox"class="custom-control-input"id="customCheck">

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

                  <!-- Sign Up Form -->
                  <form action="#" class="sign-up-form login__form">
                      <h2 class="title">Sign up</h2>

                      <div class="login__content grid">
                          <div class="login__group grid">

                              <div class="login__box half ">
                                  <input type="text" id="names" required placeholder=" " class="login__input">
                                  <label for="names" class="login__label">Name</label>
                                  <i class="fa-solid fa-user login__icon"></i>
                              </div>

                              <div class="login__box half">
                                  <input type="text" id="surnames" required placeholder=" " class="login__input">
                                  <label for="surnames" class="login__label">Surnames</label>
                                  <i class="fa-solid fa-id-card login__icon"></i>
                              </div>
                          </div>

                          <div class="login__box  ">
                              <input type="email" id="emailCreate" required placeholder=" " class="login__input">
                              <label for="emailCreate" class="login__label">Email</label>
                              <i class="fa-solid fa-envelope ri-mail-fill login__icon"></i>
                          </div>
                          <div class="login__box">
                            <input type="password" id="signupPassword" required placeholder=" " class="login__input">
                            <label for="password" class="login__label">Password</label>

                            <i class="eye-icon fas fa-eye-slash login__icon login__password" id="signupEye"></i>
                         </div>
                      </div>

                      <button type="submit" class="login__button">SignUp</button>

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
              <!-- Left Panel -->
              <div class="panel left-panel">
                  <div class="content">
                      <h3>New here? Create Your Account</h3>
                      <p>Join us and enjoy the best shopping experience. It only takes a minute to sign up!</p>
                      <button class="btn transparent" id="sign-up-btn">Sign up</button>
                  </div>
                  <img src="{{ asset('assets/images/log.svg') }}" class="image" alt="Login Illustration" />
              </div>

              <!-- Right Panel -->
              <div class="panel right-panel">
                  <div class="content">
                      <h3>One of us? Welcome Back!</h3>
                      <p>Please log in to your account to continue shopping and enjoy exclusive offers..</p>
                      <button class="btn transparent" id="sign-in-btn">Sign in</button>
                  </div>
                  <img src="{{ asset('assets/images/register.svg') }}" class="image" alt="Register Illustration" />
              </div>
          </div>
      </div>
  </div>


    <script src="{{ asset('assets/js/dashbord.js') }}"></script>
  </body>
</html>
