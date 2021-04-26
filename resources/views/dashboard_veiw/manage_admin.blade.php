@extends('dashboard_layouts.admin_main')

@section('content')

    <div class="row justify-content-center">
        <div class="col-lg-12 ">
            <div class="card">
                <div class="card-header"  style="background-color: orange;border-color:orange; color:white">Manage Admin</div>
                <div class="card-body">
                    <div class="card-title">
                        <h3 class="text-center title-2">Create Admin</h3>
                    </div>
                    <hr>
                    <form action="/dashboard/admin" method="post" >
                        @csrf
                        <div class="form-group has-success">
                            <label for="cc-name" class="control-label mb-1">Full Name</label>
                            <input id="cc-name" value="{{ old('fullname') }}" name="fullname" type="text" class="form-control cc-name valid">
                            @error('fullname')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group has-success">
                            <label for="cc-name" class="control-label mb-1">Email address</label>
                            <input id="cc-name" value="{{ old('email') }}" name="email" type="text"
                                   class="form-control cc-name valid">
                            @error('email')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="cc-number" class="control-label mb-1">Password</label>
                            <input id="cc-number"  name="password" type="password" class="form-control cc-number
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
                                <span id="payment-button-amount">Create Admin</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>



        <div class="row m-t-30">
            <div class="col-md-12">
                <!-- DATA TABLE-->
                <div class="table-responsive m-b-40">
                    <div class="card-header text-center bg-light"><strong>Admin Table</strong></div>
                    <table class="table table-borderless table-data3">
                        <thead class="bg-info">
                        <tr  style="background-color: orange;border-color:orange">
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($admins as $admin)
                            <tr>
                                <td>{{$admin->id}}</td>
                                <td>{{$admin->fullname}}</td>
                                <td>{{$admin->email}}</td>
                                <td><a class="text-primary" href="/dashboard/admin/{{$admin->id}}/edit"><span class="btn btn-primary">edit</span></a></td>
                                <td class="text-primary"><a class="text-danger" href="/dashboard/admin/{{$admin->id}}"><span
                                            class="btn btn-danger">delete</span></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- END DATA TABLE-->
            </div>
        </div>
    </div>

@endsection
