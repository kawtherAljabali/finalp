<!doctype html>
<html lang="en">

<!-- Mirrored from theme.bitrixinfotech.com/pet-shop/demo1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Jan 2021 17:30:51 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>@yield('title')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Css -->

    <meta name="csrf-token" content="{{csrf_token()}}">
    <link rel="shortcut icon" href="{{asset('pub-theme/assets/images/favicon.ico')}}">
    <link rel="stylesheet" href="{{asset('pub-theme/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('pub-theme/assets/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('pub-theme/assets/fontawesome/css/all.min.css')}}">
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
                                <a class="header-search" href="javascript:void(0)"><i class="fas fa-search"></i></a>
                                <ul class="search-dropdown">
                                    <li>
                                        <div class="header-search-box">
                                            <input class="form-control" type="text" name="search" placeholder="Search here...">
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="header-cart" href="/addcart"><i class="fas fa-shopping-bag"></i> <span class="budge">0</span></a></li>
                            {{-- <li><a class="" href=""><i class="fas fa-heart"></i> <span class="budge">10</span></a></li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header -->
<!-- Slider -->
<section class="slider-box-area">
    <div class="slider-banner-img">
        <img src="{{asset('pub-theme/assets/images/pet-img.png')}}" alt="">
    </div>
    <div class="slider-area">
        <div class="banner-slider banner-one">
            <div class="banner-box">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-8 col-12">
                            <div class="banner-description-box">
                                <div class="banner-description-img">
                                    <img src="{{asset('pub-theme/assets/images/shop-slider-background.png')}}" alt="">
                                </div>
                                <div class="banner-description" style="margin-bottom: 100px !important">
                                    <span class="wow fadeInUp center" data-wow-delay="0.2s">*Save 25% Off*</span>
                                    <h2 class="wow fadeInUp center" data-wow-delay="0.4s">Ofresh puppy</h2>
                                    <div class="sl-paw-icon wow fadeInUp center" data-wow-delay="0.6s">
                                        <img src="{{asset('pub-theme/assets/images/paw-slider.png')}}" alt="">
                                    </div>
                                    <p class="wow fadeInUp center" data-wow-delay="0.8s">Ofresh prime offers the different flavourful foods that your PET loves. Our products filled with raw ingredients with their original nutrition.</p>
                                    <div class="slider-btn wow fadeInUp center" data-wow-delay="0.6s">
                                        {{-- <button class="theme-btn">Learn More</button> --}}
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-8 col-12">
                            <div class="banner-slide-images wow pulse" data-wow-iteration="3" data-wow-duration="0.15">
                                <br><br>
                                <img src="{{asset('pub-theme/assets/images/slide1.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-slider banner-two">
            <div class="banner-box">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-8 col-12">
                            <div class="banner-description-box">
                                <div class="banner-description-img">
                                    <img src="{{asset('pub-theme/assets/images/shop-slider-background.png')}}" alt="">
                                </div>
                                <div class="banner-description" style="margin-bottom: 100px !important">
                                    <span class="wow fadeInUp center" data-wow-delay="0.2s">Pabu Animals & Pets Theme</span>
                                    <h2 class="wow fadeInUp center" data-wow-delay="0.4s">PET WELLNESS</h2>
                                    <div class="sl-paw-icon wow fadeInUp center" data-wow-delay="0.6s">
                                        <img src="{{asset('pub-theme/assets/images/paw-slider.png')}}" alt="">
                                    </div>
                                    <p class="wow fadeInUp center" data-wow-delay="0.8s">Our pet wellness products will keep your pet healthy and safe. Our products are clinically developed and certified by veterinarians and are designed to facilitate optimal wellness.</p>
                                    <div class="slider-btn wow fadeInUp center" data-wow-delay="0.6s">
                                        {{-- <button class="theme-btn">Learn More</button> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-8 col-12">
                            <div class="banner-slide-images wow pulse" data-wow-iteration="3" data-wow-duration="0.15">
                                <img src="{{asset('pub-theme/assets/images/slide2.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-slider banner-three">
            <div class="banner-box">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-8 col-12">
                            <div class="banner-description-box">
                                <div class="banner-description-img">
                                    <img src="{{asset('pub-theme/assets/images/shop-slider-background.png')}}" alt="">
                                </div>
                                <div class="banner-description"style="margin-bottom: 100px !important">
                                    <span class="wow fadeInUp center" data-wow-delay="0.2s">35% OFFER ON DOG FOOD</span>
                                    <h2 class="wow fadeInUp center" data-wow-delay="0.4s">BIGGEST SALE</h2>
                                    <div class="sl-paw-icon wow fadeInUp center" data-wow-delay="0.6s">
                                        <img src="{{asset('pub-theme/assets/images/paw-slider.png')}}" alt="">
                                    </div>
                                    <p class="wow fadeInUp center" data-wow-delay="0.8s">Grab the deal on various types of nutritional pet foods. It’s the best time to give your pet what it wants.</p>
                                    <div class="slider-btn wow fadeInUp center" data-wow-delay="0.6s">
                                        {{-- <button class="theme-btn">Learn More</button> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-8 col-12">
                            <div class="banner-slide-images wow pulse" data-wow-iteration="3" data-wow-duration="0.15">
                                <img src="{{asset('pub-theme/assets/images/slide3.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Slider -->

<br><br>
<br>
<br>
<br>


<div class="page-main">
    <!-- Our Service -->

    <section class="our-service-area">
        <div class="container">
            <div class="row">
                @foreach ($category as $cat)
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="blog-box">
                        <div class="blog-images">
                            <a href="/sub/{{$cat->id}}">
                                <img src="{{asset("uploads/images/$cat->image")}}" alt="">
                                
                            </a>
                            
                        </div>
                        <div class="blog-content">
                           
                            <h3 class="theme-title" style="text-align: center">{{$cat->name}}</h3>
                            
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Our Service -->
    <!-- Furry Friend -->
   

    <section class="special-discount-area page-background">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="special-discount-image">
                        <img src="{{asset('pub-theme/assets/images/limited-offer.png')}}" alt="">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="special-discount-box">
                        <div class="page-title text-left">
                            <h2 style="text-align: center;margin-top:120px;">
                                You can buy pets from our website
                            </h2>
                            
                        </div>
                   
                      
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Furry Friend -->
    <!-- Pet Product -->
    <section class="pet-product-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-title text-center">
                        <h2>Most Populer</h2>
                        <p>Here are listed different kinds of healthy & nutritious popular pet foods for you to choose for your beloved pet.</p>
                    </div>
                </div>
            </div>
            <div class="row">

                @foreach ($product as $product)
                    
               
                 <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 ps-column-width">
                    <div class="product-box text-center">
                        <div class="product-images">
                            <a href="/shop_detail/{{$product->id}}">
                                <img src="{{asset("uploads/images/$product->image")}}" alt=""  title="">                            </a>
                           {{-- <div class="pro-whislist-ico">
                                <i class="far fa-heart"></i>
                            </div> --}}
                        </div>
                        <div class="product-content">
                            {{-- @foreach ($category as $category) 

                            <span>{{$category->name}}</span> 
                             @endforeach  --}}

                            <h3 class="theme-title"><a href="shop-detail.html">{{$product->name}}</a></h3>
                            <div class="product-ratting">
                                <i class="fas fa-star ratting-active"></i><i class="fas fa-star ratting-active"></i><i class="fas fa-star ratting-active"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </div>
                            <div class="product-price">
                                <span class="price">{{$product->price}}</span>
                            </div>
                            {{-- <div class="product-btn">
                                <a href="/cart" class="theme-btn">Add To Cart</a>
                            </div> --}}
                        </div>
                    </div>
                </div> 
                @endforeach







                
                
                
            </div>
        </div>
    </section>
    <!-- Pet Product -->
    <!-- Pet Shop Shopping -->
    <section class="pet-shop-shopping-area">
        <div class="pet-shop-shopping-main">
            <div class="pet-shop-shopping-box pet-shop-bg">
            </div>
            <div class="pet-shop-shopping-box text-center">
                <div class="pet-shop-shopping-content">
                    <div class="pet-sale-box">
                        <img src="{{asset('pub-theme/assets/images/sell-img.png')}}" alt="">
                    </div>
                    <div class="page-title text-center">
                        <h2>Shopping Made Easy.</h2>
                        <p>Now your pet doesn’t have to wait anymore for its favorite food. This time, treat them very special by buying your pet's lovable food with the best deal available.</p>
                    </div>
                   
                </div>
            </div>
        </div>
    </section>
    <!-- Pet Shop Shopping -->
    <!-- Featured Product -->
    <section class="featured-product-area page-paddings">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-title text-center">
                        <h2>Our New
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                
                    <!-- Tab panes -->
                    <div class="tab-content col-12">
                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                            <div class="featured-product-box">
                                <div class="row">
                                   
                                    @foreach ($pro as $product)
                                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 ps-column-width">
                                        <div class="product-box text-center">
                                            <div class="product-images">
                                                <a href="/shop_detail/{{$product->id}}">
                                                    <img src="{{asset("uploads/images/$product->image")}}" alt=""  title="">  
                                                </a>
                                                {{-- <div class="pro-whislist-ico">
                                                    <i class="far fa-heart"></i>
                                                </div> --}}
                                            </div>
                                            <div class="product-content">
                                                
                                                <h3 class="theme-title"><a href="">{{$product->name}}</a></h3>
                                                <div class="product-ratting">
                                                    <i class="fas fa-star ratting-active"></i><i class="fas fa-star ratting-active"></i><i class="fas fa-star ratting-active"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span class="price"><ins>{{$product->price}}</ins></span>
                                                </div>
                                                {{-- <div class="product-btn">
                                                    <a href="/addcart" class="theme-btn">Add To Cart</a>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                 @endforeach
                                </div>
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>
    </section>
    <!-- Featured Product -->
    <!-- Special Discount -->
    
    <!-- Special Discount -->
    <!-- Blog -->
    
    <!-- Blog -->
</div>
<br>
<br>


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
                            @foreach ($category as $cat) 

                            <ul>
                                {{-- <li><a href="dog-food.html"><i class="fas fa-paw"></i> Dogs </a></li> --}}
                                <li i class="fas fa-paw" style="color: orange"><a href="/sub/{{$cat->id}}">{{$cat->name}} </a></li>

                                {{-- <li><a href="fish-food.html"><i class="fas fa-paw"></i> cat </a></li>
                                <li><a href="bird-food.html"><i class="fas fa-paw"></i> Birds</a></li> --}}
                            </ul>
                            @endforeach 
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
                            <span class="price"><ins>{{$product->price}}</ins></span>
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
                            <span class="price">{{$product->price}}</span>
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
                            <span class="price">{{$product->price}}</span>
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
</>
<!-- Javascript -->
</body>

<!-- Mirrored from theme.bitrixinfotech.com/pet-shop/demo1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Jan 2021 17:31:14 GMT -->
</html>
