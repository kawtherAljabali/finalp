@extends('dashboard_layouts.admin_main')

@section('content')

    <div class="row justify-content-center">
        <div class="col-lg-12 ">
            <div class="card">
                <div class="card-header" style="background-color: orange;border-color:orange;color:white">Manage Category</div>
                <div class="card-body">
                    <div class="card-title">
                        <h3 class="text-center title-2">Create Category</h3>
                    </div>
                    <hr>
                    <form action="/dashboard/category" method="post" enctype="multipart/form-data" >
                        @csrf
                        <div class="form-group has-success">
                            <label for="cc-name" class="control-label mb-1">Category Name</label>
                            <input id="cc-name" name="name" type="text" class="form-control cc-name valid" value="{{ old('name') }}">
                            @error('name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group has-success">
                            <label for="cc-name" class="control-label mb-1">Category Image</label>
                            <input id="cc-name" name="image" type="file" class="form-control cc-name valid" accept="image/*">
                            @error('image')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div>
                            <button style="background-color: orange;border-color:orange" id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                <span id="payment-button-amount" >Create</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>



            <div class="row m-t-30">
                <div class="col-md-12">
                    <!-- DATA TABLE-->
                    <div class="table-responsive m-b-40">
                        <div class="card-header text-center bg-light"><strong>Category Table</strong></div>
                        <table class="table table-borderless table-data3">
                            <thead class="bg-info" >
                            <tr  style="background-color: orange;border-color:orange">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($category as $categories)
                                <tr>
                                    <td>{{$categories->id}}</td>
                                    <td>{{$categories->name}}</td>
                                    <td><img src="{{asset("uploads/images/$categories->image")}}" style="height:90px; width:90px;"></td>
                                    <td><a class="text-primary" href="/dashboard/category/{{$categories->id}}/edit"><span class="btn btn-primary">edit</span></a></td>
                                    <td class="text-primary"><a class="text-danger" href="/dashboard/category/{{$categories->id}}"><span
                                                class="btn btn-danger">delete</span></a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- END DATA TABLE-->
                </div>
            </div>

@endsection
