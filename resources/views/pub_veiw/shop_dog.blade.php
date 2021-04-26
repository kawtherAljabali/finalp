@extends('pub_layouts.public_main')

@section('title')
@endsection


@section('content')
<section class="bradcrumb-area page-background">
    <div class="container">
       <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
             <div class="bradcrumb-box text-center">
                <h1>Shop</h1>
             </div>
          </div>
       </div>
    </div>
 </section>



 







 <section class="shop-page-area page-paddings">
    <div class="container">
       <div class="row">
          <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12">
             <div class="shop-sidebar">
                {{-- <div class="sidebar-widget sidebar-search">
                   <h3 class="widget-title">Search</h3>
                   <div class="sidebar-widget-box">
                      <form>
                         <div class="theme-input-box">
                            <form type="get" action="{{url('/search')}}">
                            <input class="form-control" type="text" name="query" placeholder="Search our product">
                            <button type="submit" class="widget-search-btn"><i class="fas fa-search"></i></button>
                            </form>
                         </div>
                      </form>
                   </div>
                </div> --}}
                <div class="sidebar-widget category-sub-menu">
                   <h3 class="widget-title">Categories</h3>
                   <div class="sidebar-widget-box">
                     @foreach ($category as $cat) 
                      <ul class="sidebar-category">
                         <li><a href="/sub/{{$cat->id}}">{{$cat->name}} </a></li>
                         {{-- <li><a href="">Cat </a></li>
                         <li><a href="">Bird </a></li> --}}
                       
                      </ul>
                    @endforeach 
                   </div>
                </div>
                
               
             </div>
          </div>
          <div class="col-xl-9 col-lg-9 col-md-8 col-sm-12 col-12">
            <div class="product_data">
             <div class="collection-shorting clearfix">
                <div class="short-tab">
                   <ul class="nav nav-tabs" role="tablist">
                      <li class="nav-item">
                         <a class="nav-link active" data-toggle="tab" href="#sort-1" role="tab"><i class="fas fa-th"></i></a>
                      </li>
                      <li class="nav-item">
                         <a class="nav-link" data-toggle="tab" href="#sort-2" role="tab"><i class="fas fa-list"></i></a>
                      </li>
                   </ul>
                </div>
              
             </div>
             <div class="shop-grid-box">
                <div class="tab-content">
                   <div class="tab-pane active" id="sort-1" role="tabpanel">
                      <div class="shop-product-box">

                              
                         <div class="row">
                            @foreach ($product as $product)
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                               <div class="product-box text-center">
                                  <div class="product-images">
                                    <a href="/shop_detail/{{$product->id}}">
                                    <img src="{{asset("uploads/images/$product->image")}}" alt=""  title="">                              </a>
                                    </a>
                                     {{-- <div class="pro-whislist-ico">
                                        <i class="far fa-heart"></i>
                                     </div> --}}
                                  </div>

                                  <div class="product-content">
                                   
                                     <h3 class="theme-title"><a href="shop-detail.html">{{$product->name}}</a></h3>
                                     <div class="product-ratting">
                                        <i class="fas fa-star ratting-active"></i><i class="fas fa-star ratting-active"></i><i class="fas fa-star ratting-active"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                     </div>
                                     <div class="product-price">
                                        <span class="price"><ins>{{$product->price}}</ins></span>
                                        
                                     </div>
                                  
                                     <div class="shop-qty-box clearfix">
                         
                                       <input type="hidden" class="product_id" value="{{$product->id}}">
               
                                       
                                    </div>
                                    <div class="product-btn">
                                       <a href="/addcart" class="theme-btn">Add To Cart</a>
                                    </div>
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
                 
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>




@endsection
