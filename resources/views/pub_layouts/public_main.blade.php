<!doctype html>
<html lang="en">

<!-- Mirrored from theme.bitrixinfotech.com/pet-shop/demo1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Jan 2021 17:30:51 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>
        
    @yield('title')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <!-- Css -->
    <link rel="shortcut icon" href="{{asset('pub-theme/assets/images/favicon.ico')}}">
    <link rel="stylesheet" href="{{asset('pub-theme/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('pub-theme/assets/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('pub-theme/assets/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('pub-theme/assets/css/alertify.min.css')}}"/>
    

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
    <meta property="og:image" content="{{asset('pub-theme/assets/images/meta-banner.jpg')}}">
    <meta property="og:image:secure_url" content="{{asset('pub-theme/assets/images/meta-banner.jpg')}}">


</head>
<body>
<!-- Header -->
<header class="header-main">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="header-top-left">
                        <ul class="clearfix">
                            {{-- <li><a href="#"><i class="fas fa-phone-alt"></i> +1 123 456 789</a></li>
                            <li><a href="#"><i class="far fa-envelope"></i> <span class="__cf_email__" data-cfemail="c4b7b1b4b4abb6b084bdabb1b6a0aba9a5adaaeaa7aba9">[email&#160;protected]</span></a></li> --}}
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="header-top-right">
                        <ul class="clearfix">
                           @if(Auth::check())
                            <li><a href="/profile"><i class="far fa-id-badge"></i> Welcome {{Auth::user()->name}}</a></li>
                            
                            <li><a onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();" type="submit"  href="{{ route('logout') }}">Logout</a></li>
                                <form method="POST" id="logout-form" class="d-none"
                                style="display: none"
                                 action="{{route('logout')}}">
                                    @csrf
        
                                </form>
                            @else
                                <li><a href="/login" data-toggle="modal" data-target="#LoginModal"><i class="fas fa-sign-in-alt"></i> {{__('Login')}}</a></li>
                                <li><a href="/login"><i class="fas fa-user-plus"></i> Register</a></li>
                            @endif

                            

                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>



    <div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Login</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
           
              

                <form method="POST" action="/login">
                    @csrf

                    <h2>Sign In</h2>
                    @csrf
                    <div class="login-logo">
                       <a href="index.html"><span class="theme-logo"></span></a>
                    </div>

                    <div class="theme-input-box">
                       @if(session('notuser'))
                               <div class="text-danger alert">"Your Not User! Please Register Now >>"</div>
                               {{session()->forget('notuser')}}
                               @endif
                               @if(session('usernotlogin'))
                                   <div class="text-danger alert">"Please Login to Complete Your booking "</div>

                               @endif

                       <input class="form-control @error('email') is-invalid @enderror "name="email"   placeholder="Email Address" />
                       @error('email')
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                   </span>
                               @enderror
                    </div>
                    <div class="theme-input-box">
                       <input type="password" class="form-control @error('password') is-invalid @enderror "name="password"autocomplete="current-password">
                       @error('password')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
                    </div>
                    
                       <input type="submit"  class="btn btn-warning" value="login"/>
                    
                    <p class="signup">
                       Don't have an account ?
                       <a href="#" onclick="toggleForm();">Sign Up.</a>
                    </p>
                 </form>




            </div>
            {{-- <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div> --}}
          </div>
        </div>
      </div>





















    <div class="header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-12 col-12">
                    <div class="header-logo">
                        <a href="/home"><span class="theme-logo"></span></a>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12 col-12">
                    <div class="header-main-menu">
                        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link active" href="/home">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/face">Public</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/about">About</a>
                                    </li>
                                
                                    <li class="nav-item">
                                        <a class="nav-link" href="/contact">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-12 col-12">
                    <div class="header-right-btn clearfix">
                        <ul class="float-right">
                            <li>
                                <a class="header-search"><i class="fas fa-search"></i></a>
                                <form type="get" action="{{url('/search')}}">
                                
                                <ul class="search-dropdown">
                                    <li>
                                        <div class="header-search-box">
                                            <i class="fas fa-search" aria-hidden="true"></i>
                                            <input class="form-control" type="text" name="query" placeholder="Search here...">
                                        </div>
                                    </li>
                                </ul>
                                </form>
                            </li>
                            <li><a class="header-cart" href="/addcart"><i class="fas fa-shopping-bag"></i> <span class="budge">0</span></a></li>
                            {{-- <span class="clearfix">
                                Cart
                                <span class="basket-item-count">
                                    <span class="badge badge-pill red"> 0 </span>
                                </span>
                            </span> --}}
                            {{-- <li><a class="header-wishlist" href="javascript:void(0)"><i class="fas fa-heart"></i> <span class="budge">10</span></a></li> --}}
                        </ul>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</header>
@yield('content')
<!-- Header -->
<!-- Slider -->
<br><br><br><br>
<br><br>
<br><br>

<!-- Footer -->
<footer class="footer-main">
    <div class="footer-dog-images clearfix">
        <div class="footer-dog-box">
            <img src="{{asset('pub-theme/assets/images/dog1.png')}}" alt="">
        </div>
        <div class="footer-dog-box">
            <img src="{{asset('pub-theme/assets/images/dog2.png')}}" alt="">
        </div>
        <div class="footer-dog-box">
            <img src="{{asset('pub-theme/assets/images/dog3.png')}}" alt="">
        </div>
        <div class="footer-dog-box">
            <img src="{{asset('pub-theme/assets/images/dog4.png')}}" alt="">
        </div>
        <div class="footer-dog-box">
            <img src="{{asset('pub-theme/assets/images/dog5.png')}}" alt="">
        </div>
        <div class="footer-dog-box">
            <img src="{{asset('pub-theme/assets/images/dog6.png')}}" alt="">
        </div>
        <div class="footer-dog-box">
            <img src="{{asset('pub-theme/assets/images/dog7.png')}}" alt="">
        </div>
        <div class="footer-dog-box">
            <img src="{{asset('pub-theme/assets/images/dog8.png')}}" alt="">
        </div>
    </div>
    <div class="footer-top">
        <div class="container">
            <div class="row" style="padding-left: 100px">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="footer-box">
                        <div class="footer-title">
                            <h3 class="theme-title"><i class="fas fa-paw"></i> About Kabe Shop</h3>
                        </div>
                        <div class="footer-content">
                            <p class="theme-description">We are a one-stop shop for pet owners and animal lovers. You’ll find high-quality pet supplies here. Take some time to look at our collection of pet products and accessories.</p>
                            <div class="social-media-box">
                                <ul class="social-icon clearfix">
                                    {{-- <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-12">
                    <div class="footer-box">
                        <div class="footer-title">
                            <h3 class="theme-title">Useful Links</h3>
                        </div>
                        <div class="footer-content">
                            <ul>
                                <li><a href="dog-food.html"><i class="fas fa-paw"></i> Dogs </a></li>
                                <li><a href="fish-food.html"><i class="fas fa-paw"></i> cat </a></li>
                                <li><a href="bird-food.html"><i class="fas fa-paw"></i> Birds</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="footer-box">
                        <div class="footer-title">
                         <h3 class="theme-title">My account</h3>
                        </div>
                        <div class="footer-content">
                            <ul>
                                <li><a href="/login"><i class="fas fa-paw"></i> My account</a></li>
                              
                                <li><a href="wishlist.html"><i class="fas fa-paw"></i> Wishlist</a></li>
                              
                            </ul>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="footer-box">
                        <div class="footer-title">
                            <h3 class="theme-title">Newsletter</h3>
                        </div>
                        <div class="footer-content">
                            <p class="theme-description">Sign up to newsletter and receive $20 coupon for first shopping.</p>
                            <div class="footer-newsletter">
                                <input class="form-control" type="email" name="email" placeholder="Enter your email...">
                                <button class="subscribe-btn">Subscribe</button>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="copyright-box">
                        <p>Copyright © 2021 Kabe Shop.</p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    {{-- <div class="payment-box">
                        <div class="payment-card-ico"></div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer -->
<!-- Shopping Cart Slide -->
{{-- <div class="theme-slide-box shopping-cart-slide">
    <div class="theme-slide-inner">
        <div class="slide-header">
            <h3 class="theme-title">Shopping Cart</h3>
            <span>3 Cart</span>
            <i class="slide-close fas fa-times-circle"></i>
        </div>
        <div class="slide-content">
            <ul>
                <li>
                    <div class="slider-images">
                        <a href="#"><img src="{{asset('pub-theme/assets/images/small/dog1.jpg')}}" alt=""></a>
                    </div>
                    <div class="slider-content">
                        <h3 class="theme-title">Dog Biscuits</h3>
                        <div class="product-price">
                            <span class="price"><del>$30.00</del> <ins>$28.00</ins></span>
                        </div>
                    </div>
                    <div class="cart-qty">
                        <div class="quantity-control" data-quantity="">
                            <button class="quantity-btn" data-quantity-minus="">
                                <svg viewBox="0 0 409.6 409.6">
                                    <g>
                                        <g>
                                            <path d="M392.533,187.733H17.067C7.641,187.733,0,195.374,0,204.8s7.641,17.067,17.067,17.067h375.467 c9.426,0,17.067-7.641,17.067-17.067S401.959,187.733,392.533,187.733z" />
                                        </g>
                                    </g>
                                </svg>
                            </button>
                            <input type="number" class="quantity-input" data-quantity-target="" value="1" step="1" name="quantity">
                            <button class="quantity-btn" data-quantity-plus="">
                                <svg viewBox="0 0 426.66667 426.66667">
                                    <path d="m405.332031 192h-170.664062v-170.667969c0-11.773437-9.558594-21.332031-21.335938-21.332031-11.773437 0-21.332031 9.558594-21.332031 21.332031v170.667969h-170.667969c-11.773437 0-21.332031 9.558594-21.332031 21.332031 0 11.777344 9.558594 21.335938 21.332031 21.335938h170.667969v170.664062c0 11.777344 9.558594 21.335938 21.332031 21.335938 11.777344 0 21.335938-9.558594 21.335938-21.335938v-170.664062h170.664062c11.777344 0 21.335938-9.558594 21.335938-21.335938 0-11.773437-9.558594-21.332031-21.335938-21.332031zm0 0" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="slide-remove-btn">
                        <i class="fas fa-times-circle"></i>
                    </div>
                </li>
                <li>
                    <div class="slider-images">
                        <a href="#"><img src="{{asset('pub-theme/assets/images/small/dog2.jpg')}}" alt=""></a>
                    </div>
                    <div class="slider-content">
                        <h3 class="theme-title">Peanut Butter</h3>
                        <div class="product-price">
                            <span class="price"><del>$30.00</del> <ins>$28.00</ins></span>
                        </div>
                    </div>
                    <div class="cart-qty">
                        <div class="quantity-control" data-quantity="">
                            <button class="quantity-btn" data-quantity-minus="">
                                <svg viewBox="0 0 409.6 409.6">
                                    <g>
                                        <g>
                                            <path d="M392.533,187.733H17.067C7.641,187.733,0,195.374,0,204.8s7.641,17.067,17.067,17.067h375.467 c9.426,0,17.067-7.641,17.067-17.067S401.959,187.733,392.533,187.733z" />
                                        </g>
                                    </g>
                                </svg>
                            </button>
                            <input type="number" class="quantity-input" data-quantity-target="" value="1" step="1" name="quantity">
                            <button class="quantity-btn" data-quantity-plus="">
                                <svg viewBox="0 0 426.66667 426.66667">
                                    <path d="m405.332031 192h-170.664062v-170.667969c0-11.773437-9.558594-21.332031-21.335938-21.332031-11.773437 0-21.332031 9.558594-21.332031 21.332031v170.667969h-170.667969c-11.773437 0-21.332031 9.558594-21.332031 21.332031 0 11.777344 9.558594 21.335938 21.332031 21.335938h170.667969v170.664062c0 11.777344 9.558594 21.335938 21.332031 21.335938 11.777344 0 21.335938-9.558594 21.335938-21.335938v-170.664062h170.664062c11.777344 0 21.335938-9.558594 21.335938-21.335938 0-11.773437-9.558594-21.332031-21.335938-21.332031zm0 0" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="slide-remove-btn">
                        <i class="fas fa-times-circle"></i>
                    </div>
                </li>
                <li>
                    <div class="slider-images">
                        <a href="#"><img src="{{asset('pub-theme/assets/images/small/dog3.jpg')}}" alt=""></a>
                    </div>
                    <div class="slider-content">
                        <h3 class="theme-title">All Breeds</h3>
                        <div class="product-price">
                            <span class="price"><del>$30.00</del> <ins>$28.00</ins></span>
                        </div>
                    </div>
                    <div class="cart-qty">
                        <div class="quantity-control" data-quantity="">
                            <button class="quantity-btn" data-quantity-minus="">
                                <svg viewBox="0 0 409.6 409.6">
                                    <g>
                                        <g>
                                            <path d="M392.533,187.733H17.067C7.641,187.733,0,195.374,0,204.8s7.641,17.067,17.067,17.067h375.467 c9.426,0,17.067-7.641,17.067-17.067S401.959,187.733,392.533,187.733z" />
                                        </g>
                                    </g>
                                </svg>
                            </button>
                            <input type="number" class="quantity-input" data-quantity-target="" value="1" step="1" name="quantity">
                            <button class="quantity-btn" data-quantity-plus="">
                                <svg viewBox="0 0 426.66667 426.66667">
                                    <path d="m405.332031 192h-170.664062v-170.667969c0-11.773437-9.558594-21.332031-21.335938-21.332031-11.773437 0-21.332031 9.558594-21.332031 21.332031v170.667969h-170.667969c-11.773437 0-21.332031 9.558594-21.332031 21.332031 0 11.777344 9.558594 21.335938 21.332031 21.335938h170.667969v170.664062c0 11.777344 9.558594 21.335938 21.332031 21.335938 11.777344 0 21.335938-9.558594 21.335938-21.335938v-170.664062h170.664062c11.777344 0 21.335938-9.558594 21.335938-21.335938 0-11.773437-9.558594-21.332031-21.335938-21.332031zm0 0" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="slide-remove-btn">
                        <i class="fas fa-times-circle"></i>
                    </div>
                </li>
            </ul>
        </div>
        <div class="slide-content-footer text-center">
            <h3 class="theme-title">Subtotal: <span>$84.00</span></h3>
            <ul>
                <li><a href="/cart" class="theme-btn">View Cart</a></li>
                <li><a href="checkout.html" class="theme-btn">Checkout</a></li>
            </ul>
        </div>
    </div>
</div> --}}
<!-- Shopping Cart Slide -->
<!-- Whishlist Slide -->
{{-- <div class="theme-slide-box whishlist-slide">
    <div class="theme-slide-inner">
        <div class="slide-header">
            <h3 class="theme-title">Wishlist</h3>
            <span>10 Item</span>
            <i class="slide-close fas fa-times-circle"></i>
        </div>
        <div class="slide-content">
            <ul>
                <li>
                    <div class="slider-images">
                        <a href="#"><img src="{{asset('pub-theme/assets/images/small/cat1.jpg')}}" alt=""></a>
                    </div>
                    <div class="slider-content">
                        <h3 class="theme-title">Tuna in Jelly</h3>
                        <div class="product-price">
                            <span class="price"><del>$30.00</del> <ins>$28.00</ins></span>
                        </div>
                    </div>
                    <div class="whislist-status">
                        <span>In Stock</span>
                    </div>
                    <div class="slide-remove-btn">
                        <i class="fas fa-times-circle"></i>
                    </div>
                </li>
                <li>
                    <div class="slider-images">
                        <a href="#"><img src="{{asset('pub-theme/assets/images/small/cat2.jpg')}}" alt=""></a>
                    </div>
                    <div class="slider-content">
                        <h3 class="theme-title">Intersand Odourlock</h3>
                        <div class="product-price">
                            <span class="price"><del>$30.00</del> <ins>$28.00</ins></span>
                        </div>
                    </div>
                    <div class="whislist-status">
                        <span class="out-of-stock-label">Out Of Stock</span>
                    </div>
                    <div class="slide-remove-btn">
                        <i class="fas fa-times-circle"></i>
                    </div>
                </li>
                <li>
                    <div class="slider-images">
                        <a href="#"><img src="{{asset('pub-theme/assets/images/small/cat3.jpg')}}" alt=""></a>
                    </div>
                    <div class="slider-content">
                        <h3 class="theme-title">Drools Adult Dry Cat</h3>
                        <div class="product-price">
                            <span class="price"><del>$30.00</del> <ins>$28.00</ins></span>
                        </div>
                    </div>
                    <div class="whislist-status">
                        <span>In Stock</span>
                    </div>
                    <div class="slide-remove-btn">
                        <i class="fas fa-times-circle"></i>
                    </div>
                </li>
                <li>
                    <div class="slider-images">
                        <a href="#"><img src="{{asset('pub-theme/assets/images/small/cat4.jpg')}}" alt=""></a>
                    </div>
                    <div class="slider-content">
                        <h3 class="theme-title">Fish Chunks in Gravy</h3>
                        <div class="product-price">
                            <span class="price"><del>$30.00</del> <ins>$28.00</ins></span>
                        </div>
                    </div>
                    <div class="whislist-status">
                        <span>In Stock</span>
                    </div>
                    <div class="slide-remove-btn">
                        <i class="fas fa-times-circle"></i>
                    </div>
                </li>
                <li>
                    <div class="slider-images">
                        <a href="#"><img src="{{asset('pub-theme/assets/images/small/fish1.jpg')}}" alt=""></a>
                    </div>
                    <div class="slider-content">
                        <h3 class="theme-title">Optimum Fish Food</h3>
                        <div class="product-price">
                            <span class="price"><del>$30.00</del> <ins>$28.00</ins></span>
                        </div>
                    </div>
                    <div class="whislist-status">
                        <span>In Stock</span>
                    </div>
                    <div class="slide-remove-btn">
                        <i class="fas fa-times-circle"></i>
                    </div>
                </li>
                <li>
                    <div class="slider-images">
                        <a href="#"><img src="{{asset('pub-theme/assets/images/small/fish2.jpg')}}" alt=""></a>
                    </div>
                    <div class="slider-content">
                        <h3 class="theme-title">Optimum 3 in 1 Food</h3>
                        <div class="product-price">
                            <span class="price"><del>$30.00</del> <ins>$28.00</ins></span>
                        </div>
                    </div>
                    <div class="whislist-status">
                        <span>In Stock</span>
                    </div>
                    <div class="slide-remove-btn">
                        <i class="fas fa-times-circle"></i>
                    </div>
                </li>
                <li>
                    <div class="slider-images">
                        <a href="#"><img src="{{asset('pub-theme/assets/images/small/fish3.jpg')}}" alt=""></a>
                    </div>
                    <div class="slider-content">
                        <h3 class="theme-title">Tetra Bits Complete</h3>
                        <div class="product-price">
                            <span class="price"><del>$30.00</del> <ins>$28.00</ins></span>
                        </div>
                    </div>
                    <div class="whislist-status">
                        <span class="out-of-stock-label">Out Of Stock</span>
                    </div>
                    <div class="slide-remove-btn">
                        <i class="fas fa-times-circle"></i>
                    </div>
                </li>
                <li>
                    <div class="slider-images">
                        <a href="#"><img src="{{asset('pub-theme/assets/images/small/fish4.jpg')}}" alt=""></a>
                    </div>
                    <div class="slider-content">
                        <h3 class="theme-title">Bioactive Formula</h3>
                        <div class="product-price">
                            <span class="price"><del>$30.00</del> <ins>$28.00</ins></span>
                        </div>
                    </div>
                    <div class="whislist-status">
                        <span>In Stock</span>
                    </div>
                    <div class="slide-remove-btn">
                        <i class="fas fa-times-circle"></i>
                    </div>
                </li>
                <li>
                    <div class="slider-images">
                        <a href="#"><img src="{{asset('pub-theme/assets/images/small/small-pet1.jpg')}}" alt=""></a>
                    </div>
                    <div class="slider-content">
                        <h3 class="theme-title">Pedigree Puppy</h3>
                        <div class="product-price">
                            <span class="price"><del>$30.00</del> <ins>$28.00</ins></span>
                        </div>
                    </div>
                    <div class="whislist-status">
                        <span class="out-of-stock-label">Out Of Stock</span>
                    </div>
                    <div class="slide-remove-btn">
                        <i class="fas fa-times-circle"></i>
                    </div>
                </li>
                <li>
                    <div class="slider-images">
                        <a href="#"><img src="{{asset('pub-theme/assets/images/small/small-pet2.jpg')}}" alt=""></a>
                    </div>
                    <div class="slider-content">
                        <h3 class="theme-title">Drools Chicken</h3>
                        <div class="product-price">
                            <span class="price"><del>$30.00</del> <ins>$28.00</ins></span>
                        </div>
                    </div>
                    <div class="whislist-status">
                        <span>In Stock</span>
                    </div>
                    <div class="slide-remove-btn">
                        <i class="fas fa-times-circle"></i>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div> --}}
<!-- Whishlist Slide -->
<!-- Preloader -->
<div class="theme-preloader">
    <span><img src="{{asset('pub-theme/assets/images/dog-preloader.gif')}}" alt=""></span>
</div>
<!-- Preloader -->
<!-- Page Up -->
<a id="page-up" class="page-up-box"><i class="fas fa-arrow-alt-circle-up"></i></a>
<!-- Page Up -->
<!-- Color Switcher -->
<div class="switch-button"><i class="fas fa-cog fa-spin"></i></div>
<div class="switched-styles">
    <h4>Color Switcher</h4>
    <ul class="list-unstyled">
        <li class="theme-default" data-color="orange"></li>
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
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="{{asset('pub-theme/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('pub-theme/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('pub-theme/assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('pub-theme/assets/js/wow.min.js')}}"></script>
<script src="{{asset('pub-theme/assets/js/jquery.cookie.min.js')}}"></script>
<script src="{{asset('pub-theme/assets/js/custom.js')}}"></script>



<script src="{{asset('pub-theme/assets/js/customm.js')}}"></script>
<script src="{{asset('pub-theme/assets/js/alertify.min.js')}}

"></script>
<script>
 @if(session('status'))
     alertify.set('notifier','position','top-right');
     alertify.success("{{session('status')}}");
 @endif
    </script>

<script>
    function makeTimer() {
        //      var endTime = new Date("29 April 2018 9:56:00 GMT+01:00");
        var endTime = new Date("31 December 2020 9:56:00 GMT+01:00");
        endTime = (Date.parse(endTime) / 1000);

        var now = new Date();
        now = (Date.parse(now) / 1000);

        var timeLeft = endTime - now;

        var days = Math.floor(timeLeft / 86400);
        var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
        var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600)) / 60);
        var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));

        if (hours < "10") {
            hours = "0" + hours;
        }
        if (minutes < "10") {
            minutes = "0" + minutes;
        }
        if (seconds < "10") {
            seconds = "0" + seconds;
        }

        $(".days").html(days + "<span>Days</span>");
        $(".hours").html(hours + "<span>Hours</span>");
        $(".minutes").html(minutes + "<span>Minutes</span>");
        $(".seconds").html(seconds + "<span>Seconds</span>");

    }
    setInterval(function () {
        makeTimer();
    }, 1000);
</script> 
</body>

<!-- Mirrored from theme.bitrixinfotech.com/pet-shop/demo1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Jan 2021 17:31:14 GMT -->
</html>
