<!doctype html>
<html lang="en">
   
<!-- Mirrored from theme.bitrixinfotech.com/pet-shop/demo1/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Jan 2021 17:31:28 GMT -->
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Css -->
      <link rel="shortcut icon"  href="{{asset('pub-theme/assets/images/favicon.ico')}}">
      <link rel="stylesheet"     href="{{asset('pub-theme/assets/css/style.css')}}">
      <link rel="stylesheet"     href="{{asset('pub-theme/assets/css/responsive.css')}}">
      <link rel="stylesheet"     href="{{asset('pub-theme/assets/fontawesome/css/all.min.css')}}">
      <!-- Css -->
      <title>Buy Pet Products Online With Best Prices | Pet Shop</title>
      <meta name="Keywords" content="Pet shop, online pet shop, pet food, online pet food, best pet food">
      <meta name="Description" content="We are leading online pet store for all your pet supply needs. We deliver our products all over the world with the best prices available.">
      <meta name="twitter:card" content="summary">
      <meta name="twitter:description" content="We are leading online pet store for all your pet supply needs. We deliver our products all over the world with the best prices available.">
      <meta name="twitter:title" content="Buy Pet Products Online With Best Prices | Pet Shop">
      <meta name="twitter:image" content="assets/images/meta-banner.jpg">
      <meta property="og:locale" content="en_US">
      <meta property="og:type" content="article">
      <meta property="og:title" content="Buy Pet Products Online With Best Prices | Pet Shop">
      <meta property="og:description" content="We are leading online pet store for all your pet supply needs. We deliver our products all over the world with the best prices available.">
      <meta property="og:url" content="">
      <meta property="og:site_name" content="Pet Shop">
      <meta property="og:image" content="assets/images/meta-banner.jpg">
      <meta property="og:image:secure_url" content="{{asset('pub-theme/assets/images/meta-banner.jpg')}}">
   </head>
   <body>
      <!-- Login -->
      <section class="user-login-area">
         <div class="container">
            <div class="user signinBx">
               <div class="imgBx"><img src="{{asset('pub-theme/assets/images/login-bg.jpg')}}" alt="" /></div>
               <div class="formBx">


                  <form method="POST" action="{{ route('login') }}">
                     <h2>Sign In</h2>
                     @csrf
                     <div class="login-logo">
                        <a href="/home"><span class="theme-logo"></span></a>
                     </div>

                     <div class="theme-input-box">
                        @if(session('notuser'))
                                <div class="text-danger alert">"Your Not User! Please Register Now >>"</div>
                                {{session()->forget('notuser')}}
                                @endif
                                @if(session('usernotlogin'))
                                    <div class="text-danger alert">"Please Login to Complete Your booking "</div>

                                @endif

                        <input class="form-control" type="email" name="email" placeholder="Email Address" />
                     </div>
                     <div class="theme-input-box">
                        <input class="form-control" type="password" name="password" placeholder="Password" />
                     </div>
                     <div class="theme-input-box">
                        <button class="theme-btn">Login</button>
                     </div>
                     <p class="signup">
                        Don't have an account ?
                        <a href="#" onclick="toggleForm();">Sign Up.</a>
                     </p>
                  </form>
               </div>
            </div>
            <div class="user signupBx">
               <div class="formBx">
                  <form action="/login" method="post">
                     <h2>Create an account</h2>
                     @csrf
                     <div class="login-logo">
                        <a href="/home"><span class="theme-logo"></span></a>
                     </div>

                     <div class="theme-input-box">
                        <input class="form-control" type="text" name="name" placeholder="User Name" />
                        @error('name')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                     </div>
                     <div class="theme-input-box">
                        <input class="form-control" type="email" name="email" placeholder="Email Address" />
                        @error('email')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                     </div>
                     <div class="theme-input-box">
                        <input class="form-control" type="password" name="password" placeholder="Password" />
                        @error('password')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                     </div>
                     <div class="theme-input-box">
                      
                        <input class="form-control" type="password" name="password_confirmation" placeholder="Confirm Password" />
                        @error('password_confirmation')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                     </div>
                     <div class="theme-input-box">
                        <button class="theme-btn">Sign Up</button>
                     </div>
                     <p class="signup">
                        Already have an account ?
                        <a href="#" onclick="toggleForm();">Sign in.</a>
                     </p>
                  </form>
               </div>
               <div class="imgBx"><img src="{{asset('pub-theme/assets/images/signup-bg.jpg')}}" alt="" /></div>
            </div>
         </div>
      </section>
      <!-- Login -->
      <!-- Preloader -->
      <div class="theme-preloader">
         <span><img src="{{asset('pub-theme/assets/images/dog-preloader.gif')}}" alt=""></span>
      </div>
      <!-- Preloader -->
      <!-- Color Switcher -->
      <div class="switch-button"><i class="fas fa-cog fa-spin"></i></div>
      <div class="switched-styles">
         <h4>Color Switcher</h4>
         <ul class="list-unstyled">
            <li class="theme-orange" data-color="orange"></li>
            <li class="theme-pink" data-color="pink"></li>
            <li class="theme-gold" data-color="gold"></li>
            <li class="theme-green" data-color="green"></li>
            <li class="theme-light-blue" data-color="light-blue"></li>
            <li class="theme-blue" data-color="blue"></li>
            <li class="theme-purble" data-color="purble"></li>
            <li class="theme-rose" data-color="rose"></li>
         </ul>
         <div class="hide-button">×</div>
      </div>
      <!-- Color Switcher -->
      <!-- Javascript -->
      <script src="{{asset('pub-theme/assets/js/jquery.min.js')}}"></script>
      <script src="{{asset('pub-theme/assets/js/bootstrap.min.js')}}"></script>
      <script src="{{asset('pub-theme/assets/js/owl.carousel.min.js')}}"></script>
      <script src="{{asset('pub-theme/assets/js/wow.min.js')}}"></script>
      <script src="{{asset('pub-theme/assets/js/jquery.cookie.min.js')}}"></script>
      <script src="{{asset('pub-theme/assets/js/custom.js')}}"></script>
      <!-- Javascript -->
   </body>

<!-- Mirrored from theme.bitrixinfotech.com/pet-shop/demo1/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Jan 2021 17:31:29 GMT -->
</html>