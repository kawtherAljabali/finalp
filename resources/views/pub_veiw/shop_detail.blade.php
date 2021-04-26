

@extends('pub_layouts.public_main')

@section('title')
@endsection


@section('content')

  
   
<section class="shop-detail-box-area page-paddings">

   <div class="container">
      <div class="row">

         <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="shop-pro-main">
               <div class="shop-pro-thumbnail">
                  <ul class="shop-slider">
                     <li><span><img src="assets/images/thumbnail/small.jpg" onclick="ChangeImage('assets/images/pro-detail.jpg');" alt=""></span></li>
                     <li><span><img src="assets/images/thumbnail/small-1.jpg" onclick="ChangeImage('assets/images/thumbnail/1.jpg');" alt=""></span></li>
                     <li><span><img src="assets/images/thumbnail/small-2.jpg" onclick="ChangeImage('assets/images/thumbnail/2.jpg');" alt=""></span></li>
                     <li><span><img src="assets/images/thumbnail/small-3.jpg" onclick="ChangeImage('assets/images/thumbnail/3.jpg');" alt=""></span></li>
                  </ul>
               </div>
               <div class="shop-pro-images">
                  <img src="{{asset("uploads/images/$product->image")}}" alt="">                        </div>
            </div>
         </div>
 
         <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="product_data">

            <div class="shop-detail-content">
               <div class="detail-info">

                  <h2 class="product-title ">{{$product->name}}</h2>
                  <div class="product-price ">                      
                     <ins class="enj-product-price engoj_price_main">{{$product->price}}</ins>
                  </div>
                  <div class="product-ratting">
                     <i class="fas fa-star ratting-active"></i><i class="fas fa-star ratting-active"></i><i class="fas fa-star ratting-active"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                  </div>
                  <div class="pro-detail-desc">
                     <p class="theme-description">{{$product->desc}}</p>
                  </div>
                  <div class="product-weight">
                   
                  </div>

                  <div class="shop-qty-box clearfix">
                     <div class="quantity-control" data-quantity="">
                        <button class="quantity-btn" data-quantity-minus="">
                           <svg viewBox="0 0 409.6 409.6">
                              <g>
                                 <g>
                                    <path d="M392.533,187.733H17.067C7.641,187.733,0,195.374,0,204.8s7.641,17.067,17.067,17.067h375.467 c9.426,0,17.067-7.641,17.067-17.067S401.959,187.733,392.533,187.733z"></path>
                                 </g>
                              </g>
                           </svg>
                        </button>
                        <input type="hidden" class="product_id" value="{{$product->id}}">
                        <input type="number" class="quantity-input" data-quantity-target="" value="1" step="1" name="quantity"> 

                        <button class="quantity-btn" data-quantity-plus="">
                           <svg viewBox="0 0 426.66667 426.66667">
                              <path d="m405.332031 192h-170.664062v-170.667969c0-11.773437-9.558594-21.332031-21.335938-21.332031-11.773437 0-21.332031 9.558594-21.332031 21.332031v170.667969h-170.667969c-11.773437 0-21.332031 9.558594-21.332031 21.332031 0 11.777344 9.558594 21.335938 21.332031 21.335938h170.667969v170.664062c0 11.777344 9.558594 21.335938 21.332031 21.335938 11.777344 0 21.335938-9.558594 21.335938-21.335938v-170.664062h170.664062c11.777344 0 21.335938-9.558594 21.335938-21.335938 0-11.773437-9.558594-21.332031-21.335938-21.332031zm0 0"></path>
                           </svg>
                        </button>
                     </div>
                     <div class="shop-cart-btn">
                        <a href="/addcart" class="theme-btn">Add To Cart</a>
                     </div>
                  </div>
                  {{-- <div class="shop-buy-btn">
                     <button class="theme-btn">Buy It Now</button>
                  </div> --}}
               </div>
            </div>
         </div>
      </div>
      </div>
      </div>
      
   </div>
   
      
      <div class="row">
         <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="pro-detail-tab">
               <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                     <a style="margin-left: 50px" class="nav-link active" data-toggle="tab" href="#description" role="tab">Description</a>
                  </li>
                
               </ul>
               <div class="tab-content" style="margin-left: 50px">
                  <div class="tab-pane active" id="description" role="tabpanel">
                     <div class="pro-detail-tab-content">
                        <p class="theme-description"></p>
                        <p class="theme-description">{{$product->desc}}</p>
                     </div>
                  </div>
                 
               </div>
            </div>
         </div>
      </div>
      </div>
   </div>
   
</section>








<section class="related-product-area">
   <div class="container">
      <div class="row">
         <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-title text-center">
               <h2>Related products</h2>
               <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
            </div>
         </div>
      </div>
      <div class="row">

         <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="product_data">
            <div class="related-product-slider">
               
@foreach ($related_pro as $pro)
               <div class="product-box text-center">
                  <div class="product-images">
                     <a href="/shop_detail/{{$pro->id}}">
                        
                        <img src="{{asset("uploads/images/$pro->image")}}" alt=""  title="">                              </a>
                     </a>
                     <div class="pro-whislist-ico">
                        <i class="far fa-heart"></i>
                     </div>
                     <span class="prr-new-label">New</span>
                  </div>
                  <div class="product-content">
                     
                     <h3 class="theme-title" >{{$pro->name}}</a></h3>
                     <div class="product-ratting">
                        <i class="fas fa-star ratting-active"></i><i class="fas fa-star ratting-active"></i><i class="fas fa-star ratting-active"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                     </div>
                     <div class="product-price">
                        <span class="price">{{$pro->price}}</span>
                     </div>





                  



                     <div class="shop-qty-box clearfix">
                         
                           <input type="hidden" class="product_id" value="{{$product->id}}">
   
                           
                        </div>
                        <div class="product-btn">
                           <a href="/cart" class="theme-btn">Add To Cart</a>
                        </div>
                     </div>

















                     {{-- <div class="product-btn">
                    <a href="/cart" class="theme-btn">Add To Cart</a>
                     </div> --}}
                  </div>
@endforeach
               </div>

               
            </div>
            </div>
         </div>
         
      </div>
   </div>
</section>





















      @endsection
