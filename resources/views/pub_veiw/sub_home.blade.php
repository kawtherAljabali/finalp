@extends('pub_layouts.public_main')

@section('title')
@endsection


@section('content')

<section class="slider-box-area">
    <div class="slider-banner-img">
        {{-- <img src="{{asset('pub-theme/assets/images/pet-img.png')}}" alt=""> --}}
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

    <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12 col-12">
        <div class="header-main-menu">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   
                </div>
            </nav>
        </div>
    </div>






    <section class="our-service-area">

        <div class="container">

            <div class="row">
                @foreach ($subcatigory as $subcatigory)

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="blog-box">
                        <div class="blog-images">
                            <a href="/shop_dog/{{$subcatigory->id}}">
                           <img src="{{asset("uploads/images/$subcatigory->image")}}" alt=""  title="">                              </a>
                            
                        </div>
                        <div class="blog-content">
                           
                            <h3 class="theme-title" style="text-align: center">{{$subcatigory->name}}</h3>
                            
                        </div>
                    </div>
                </div>
                @endforeach    


            </div>

        </div>
</section>
@endsection

