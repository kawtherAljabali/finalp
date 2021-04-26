@extends('pub_layouts.public_main')

@section('title')
@endsection


@section('content')
         <!-- Bradcrumb -->
         <section class="bradcrumb-area page-background">
            <div class="container">
               <div class="row">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                     <div class="bradcrumb-box text-center">
                        <h1>Checkout</h1>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- Bradcrumb -->
         <!-- Checout -->
         <section class="checout-area page-paddings">
            <div class="container">
               <div class="row">
                  <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                     <div class="checkout-title">
                        <h3 class="theme-title">Billing address</h3>
                     </div>
                     <div class="checkout-fom-box">
                        <form action="{{ url('place-order')}}" method="POST" class="needs-validation" novalidate>
                           {{csrf_field() }}
                           <div class="row">
                              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                 <div class="theme-input-box">
                                    <label for="firstName">First name</label>
                                    <input type="text"name="first_name" class="form-control" id="firstName" placeholder="First name" value="{{Auth::user()->name}}" required>
                                 </div>
                              </div>
                              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                 <div class="theme-input-box">
                                    <label for="lastName">Last name</label>
                                    <input type="text" name="last_name"class="form-control" id="lastName" placeholder="Last name" value="{{Auth::user()->lname}}" required>
                                 </div>
                              </div>
                              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                 <div class="theme-input-box">
                                    <label for="lastName">Phone number</label>
                                    <input type="text" name="phone_no" class="form-control" id="lastName" placeholder="Phone number" value="{{Auth::user()->phone}}" required>
                                 </div>
                              </div>
                              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                 <div class="theme-input-box">
                                    <label for="lastName">Alternate Number</label>
                                    <input type="text" name="alter_no" class="form-control" id="lastName" placeholder="Alternate Number" value="{{Auth::user()->alternate_phone}}" required>
                                 </div>
                              </div>
                              
                             
                              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                 <div class="theme-input-box">
                                    <label for="address">Address1</label>
                                    <input type="text"  name="address1"class="form-control" value="{{Auth::user()->address1}}" id="address" placeholder="1234 Main St" required>
                                 </div>
                              </div>
                              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                 <div class="theme-input-box">
                                    <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
                                    <input type="text"name="address2" value="{{Auth::user()->address2}}" class="form-control" id="address2" placeholder="Apartment or suite">
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-xl-5 col-lg-5 col-md-5 col-sm-4 col-12">
                                 <div class="theme-input-box">
                                    {{-- <label for="country">city</label>
                                    <select name="city" value="{{Auth::user()->city}}"class="form-control custom-select" id="country" required>
                                       <option value="">amman</option>
                                       <option>United States</option>
                                    </select> --}}
                                  
                                 </div>
                              </div>
                              <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                 <div class="theme-input-box">
                                    {{-- <label for="state">State</label>
                                    <select class="form-control custom-select" name="state" value="{{Auth::user()->state}}" required>
                                       <option value="">Choose...</option>
                                       <option>California</option>
                                    </select> --}}
                                    <div class="invalid-feedback">
                                       Please provide a valid state.
                                    </div>
                                 </div>
                              </div>
                              <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-12">
                                 {{-- <div class="theme-input-box">
                                    <label for="zip">Pincode</label>
                                    <input name="pincode" type="text" class="form-control"  value="{{Auth::user()->pincode}}"id="zip" placeholder="" required>
                                    <div class="invalid-feedback">
                                       Zip code required.
                                    </div>
                                 </div> --}}
                              </div>
                           </div>
                         
                           <h3 class="theme-title theme-title-box">Payment</h3>
                           <div class="checkout-radio-box">
                              <div class="custom-control custom-radio">
                                 <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                                 <label class="custom-control-label" for="credit">cash and delevery</label>
                              </div>
                             
                           
                           </div>
                        
                        
                           <div class="col-md-6">
                              {{-- <a href="tracking.html" class="theme-btn">Place Order</a> --}}
                              <button type="submit" name="place_order_btn" class="btn btn-primary">Place Order</button>
                           </div>
                          
                        </form>
                     </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                     @if(isset($cart_data))
                         @if(Cookie::get('shopping_cart'))
                             @php $total="0" @endphp
                             <table class="table">
                               <thead>
                                  <tr>
                                      <th>product</th>
                                      <th>price</th>
                                      <th>qty</th>
                                  </tr>
                                 </thead>
                                 <tbody>
                                    @foreach ($cart_data as $data)
                                    <tr>
                                      
                                         <td>  {{ $data['item_name'] }}</td>
                                         <td> {{number_format($data['item_price'], 0)}}</td>
                                         <td> {{ $data['item_quantity'] }}</td>
                                          @php $total = $total + ($data["item_quantity"] * $data["item_price"]) @endphp

       
       
                                       
                                    </tr>
                                    @endforeach
                                 </tbody>
                              </table>
                              <hr>
                              <div class="text-right">
                                <h5>Grand Totoal:{{ number_format($total, 0) }} 
                         @endif
                          @else
                             <div class="row">
                                 <div class="col-md-12 text-center">
                                     <div class="shadow border py-5">
                                         <h4>Your cart is currently empty.</h4>
                                         <a href="{{ url('collections') }}" class="btn btn-upper btn-primary outer-left-xs mt-5">Continue Shopping</a>
                                     </div>
                                 </div>
                             </div>
                           @endif
                  </div>
            </div>
         </section>
               
      @endsection

      @section('script')
      <script src="https://checkout.razorpay.com/v1/checkout.js"></script>

          {{-- <script src="https://checkout.razorpay.com/v1/checkout.js"></script> --}}
          <script src="{{asset('assets/js/checkout.js')}}"></script>



      @endsection