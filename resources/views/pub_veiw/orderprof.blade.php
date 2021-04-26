@extends('pub_layouts.public_main')

@section('title')
    My Orders
@endsection


@section('content')

    <div class="container-fuild">
        <nav aria-label="breadcrumb">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/home')}}">@lang('website.Home')</a></li>
                </ol>
            </div>
        </nav>
    </div>

    <!--My Order Content -->
    <section class="order-one-content pro-content">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-3  d-none d-lg-block d-xl-block">
                    <div class="heading">

                        <hr>
                    </div>
                    {{-- @if(Auth::guard('customer')->check()) --}}
                    <ul class="list-group">
                        <li class="list-group-item" style="background-color: orange !important">
                            <a class="nav-link" href="{{ URL::to('/profile')}}" style="color: white !important">
                                <i class="fas fa-user"></i>
                                Profile
                            </a>
                        </li>

                        <li class="list-group-item" style="background-color: orange !important">
                            <a class="nav-link" href="{{ URL::to('/orderprf')}}" style="color: white !important">
                                <i class="fas fa-shopping-cart"></i>
                                Orders
                            </a>
                        </li>

                        <li class="list-group-item" style="background-color: orange !important">
                            <a class="nav-link" href="{{ URL::to('/logout')}}" style="color: white !important">
                                <i class="fas fa-power-off"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-lg-9 ">
                    <div class="heading">
                        <h2>My Orders</h2>
                        <hr>
                    </div>
                    <table class="table order-table">
                        <thead>
                        <tr class="d-flex">
                            <th class="col-12 col-md-2">Order ID</th>
                            <th class="col-12 col-md-2">Total Price</th>
                            <th class="col-12 col-md-3">Items Count</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $get)
                                <tr class="d-flex">
                                    <td class="col-12 col-md-2">{{ $get->id }}</td>
                                    <td class="col-12 col-md-2">{{ $get->total }} JD</td>
                                    <td class="col-12 col-md-2">{{ $get->items_count }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
