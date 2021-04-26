@extends('pub_layouts.public_main')

@section('title')
@endsection


@section('content')

<div class="container rounded bg-white mt-5">
    <div class="row">

        <div class="col-md-4 border-right">
            <div class="heading">
                        <h2>
                            My Account
                        </h2>
                        <hr >
                      </div>
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><span class="font-weight-bold"> Wellcom {{Auth::user()->name}}

                    <ul>
                        <li class="list-group-item"style="background-color: orange !important">
                            <a class="nav-link" href="{{ URL::to('/profile')}}"style="color: white !important">
                                <i class="fas fa-user"></i>
                              Profile
                            </a>
                        </li>

                        <li class="list-group-item"style="background-color: orange !important">
                            <a class="nav-link" href="{{ URL::to('/orderprf')}}" style="color: white !important">
                                <i class="fas fa-shopping-cart"></i>
                              Orders
                            </a>
                        </li>

                        <li class="list-group-item" style="background-color: orange !important">
                            <a class="nav-link" href="/userlogout"  style="color: white !important">
                                <i class="fas fa-power-off"></i>
                              Logout
                            </a>
                        </li>

                      </ul>


            </div>
        </div>

        <div class="col-md-8">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="d-flex flex-row align-items-center back"><i class="fa fa-long-arrow-left mr-1 mb-1"></i>
                       <a href="/home"> <h6  style="color: orange">Back to home</h6></a>
                    </div>
                    <h6 class="text-right">Edit Profile</h6>
                </div>
                <form action="{{ url('profile')}}" method="POST" class="needs-validation" novalidate>
                    {{csrf_field() }}
                <div class="row mt-2">
                    <div class="col-md-6"><input type="text"name="first_name" class="form-control" placeholder="first name" value="{{Auth::user()->name}}"></div>
                    <div class="col-md-6"><input type="text"  name="last_name" class="form-control"value="{{Auth::user()->lname}}" placeholder="lastNmae"></div>
                </div>
                <div class="row mt-3">

                    <div class="col-md-6"><input type="text" name="phone_no"class="form-control"value="{{Auth::user()->phone}}" placeholder="Phone number"></div>
                    <div class="col-md-6"><input type="text" class="form-control"  name="alter_no" placeholder="alternate_phone"value="{{Auth::user()->alternate_phone}}"></div>

                </div>


                <div class="row mt-3">
                    <div class="col-md-6"><input type="text" class="form-control"name="address1" placeholder="address1"value="{{Auth::user()->address1}}"></div>
                    <div class="col-md-6"><input type="text" class="form-control"name="address2" value="{{Auth::user()->address2}}" placeholder="address2"></div>
                </div>
				<div class="row mt-3">
                    {{-- <div class="col-md-6"><input type="text" class="form-control" placeholder="city"value="{{Auth::user()->city}}"></div> --}}

                    {{-- <div class="col-md-6"><input type="text" class="form-control"  name="state" value="{{Auth::user()->state}}" placeholder="state"></div> --}}
                </div>
				<div class="row mt-3">
                    <div class="col-md-6"><input type="text" class="form-control" name="password" placeholder="passsword"value=""></div>
                    <div class="col-md-6"><input type="text" class="form-control" name="email" placeholder="passsword"value="{{Auth::user()->email}}"></div>

                </div>
                <button type="submit" name="save_pr" class="btn btn-primary "  style="margin-top: 50px;background-color: orange !important">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>











@endsection
