@extends('dashboard_layouts.admin_main')

@section('content')

    <div class="row justify-content-center">
        <div class="col-lg-12 ">
            <div class="card">
                <div class="card-header"  style="background-color: orange;border-color:orange;color:white">Manage Admin</div>
                <div class="card-body">
                    <div class="card-title">
                        <h3 class="text-center title-2">Edit Admin</h3>
                    </div>
                    <hr>
                    <form action="/dashboard/admin/{{$admin->id}}" method="post" >
                        @csrf
                        @method('PUT')
                        <div class="form-group has-success">
                            <label for="cc-name" class="control-label mb-1">Full Name</label>
                            <input id="cc-name" value="{{$admin->fullname}}" name="fullname" type="text"
                                   class="form-control
                            cc-name
                            valid">
                            @error('fullname')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group has-success">
                            <label for="cc-name" class="control-label mb-1">Email address</label>
                            <input id="cc-name" value="{{$admin->email}}" name="email" type="text"
                                   class="form-control cc-name valid">
                            @error('email')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="cc-number" class="control-label mb-1">Password</label>
                            <input id="cc-number" value="{{$admin->password}}" name="password" type="password"
                                   class="form-control cc-number
                            identified
                            visa" value="">
                            @error('password')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="cc-number" class="control-label mb-1">Confirm Password</label>
                            <input id="cc-number" name="password_confirmation" type="password" class="form-control cc-number
                             identified visa" value="" >
                            @error('password_confirmation')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div>
                            <button  style="background-color: orange;border-color:orange" id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                <span id="payment-button-amount">Update</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

@endsection
