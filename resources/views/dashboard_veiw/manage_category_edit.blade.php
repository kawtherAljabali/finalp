@extends('dashboard_layouts.admin_main')

@section('content')

    <div class="row justify-content-center">
        <div class="col-lg-12 ">
            <div class="card">
                <div class="card-header" style="background-color: orange;border-color:orange;color:white">Manage Category</div>
                <div class="card-body">
                    <div class="card-title">
                        <h3 class="text-center title-2">Edit Category</h3>
                    </div>
                    <hr>
                    <form action="/dashboard/category/{{$category->id}}" method="post" enctype="multipart/form-data" >
                        @csrf
                        @method('PUT')

                        <div class="input-group">
                            <img class="rounded mx-auto d-block" width="200" height="200"
                                 src="{{asset("uploads/images/$category->image")}}"></div>

                        <div class="form-group has-success">
                            <label for="cc-name" class="control-label mb-1">Category Name</label>
                            <input id="cc-name" name="name" type="text" class="form-control cc-name valid" value="{{$category->name}}">
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
                                <span id="payment-button-amount">Update</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

@endsection
