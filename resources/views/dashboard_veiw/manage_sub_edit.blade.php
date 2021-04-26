@extends('dashboard_layouts.admin_main')

@section('content')

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header"style="background-color: orange;border-color:orange;color:white">
                Update subcatigory
            </div>
            <div class="card-body card-block">
                <form action="/dashboard/manage_sub/{{$subcatigory->id}}" method="post" enctype="multipart/form-data"
                      class="form-horizontal">
                    @csrf
                    @method('PUT')
                    <div class="input-group">
                        <img class="rounded mx-auto d-block" width="200" height="200"
                             src="{{asset("uploads/images/$subcatigory->image")}}"></div>
                   <br>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="select_category" class=" form-control-label">Select Category</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select name="select_category" id="select" class="form-control" >
                                @foreach($categorys as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                            @error('select_category')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">sub Name</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="name" placeholder="Text" class="form-control"
                                   value="{{ $subcatigory->name }}" >
                            @error('name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="file-input" class=" form-control-label">Uploaded Image</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="file" id="file-input" name="image" class="form-control-file" value="{{ $subcatigory->image }}">

                            @error('image')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
            <div class="card-footer">
                <div>
                    <button style="background-color: orange;border-color:orange" id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                        <span id="payment-button-amount">Update sub</span>
                    </button>
                </div>
            </div>
        </form>
    </div>

@endsection
