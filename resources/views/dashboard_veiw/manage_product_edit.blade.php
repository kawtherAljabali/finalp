@extends('dashboard_layouts.admin_main')

@section('content')

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header"style="background-color: orange;border-color:orange;color:white">
             Update Product
            </div>
            <div class="card-body card-block">
                <form action="/dashboard/manage_product/{{$product->id}}" method="post" enctype="multipart/form-data"
                      class="form-horizontal">
                    @csrf
                    @method('PUT')

                    <div class="input-group">
                        <img class="rounded mx-auto d-block" width="200" height="200"
                             src="{{asset("uploads/images/$product->image")}}"></div>
                   <br>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="select_category" class=" form-control-label">Select SubCategory</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select name="select_sub" id="select" class="form-control" >
                                @foreach($subcatigory as $subcatigory)
                                <option value="{{$subcatigory->id}}">{{$subcatigory->name}}-{{$subcatigory->getcategoryname()}}</option>
                                @endforeach
                            </select>
                            @error('select_sub')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>



                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">product Name</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="name" placeholder="Text" class="form-control"
                                   value="{{ $product->name }}" >
                            @error('name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="textarea-input" class=" form-control-label">product Description</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <textarea name="desc" id="textarea-input" rows="9" placeholder="Content..."
                                      class="form-control">{{ $product->desc }}</textarea>
                            @error('desc')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>



                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="cc-name" class="control-label mb-1">product Price</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input id="cc-name"  value="{{ $product->price }}" name="price" type="text"
                                   class="form-control cc-name valid">
                            @error('price')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="file-input" class=" form-control-label">Uploaded Image</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="file" id="file-input" name="image" class="form-control-file">
                            @error('image')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>


            </div>
            <div class="card-footer">
                <div>
                    <button style="background-color: orange;border-color:orange;color:white" id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                        <span id="payment-button-amount" >Update product</span>
                    </button>
                </div>
            </div>
        </div>
        </form>
    </div>

@endsection
