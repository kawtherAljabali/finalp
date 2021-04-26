@extends('dashboard_layouts.admin_main')

@section('content')

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header"style="background-color: orange;border-color:orange;color:white">
                Manage product

            </div>
            
            <div class="card-body card-block">
                <div class="card-title">
                    <h3 class="text-center title-2">Create Product</h3>
                </div>
                <hr>
                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                    @csrf
                    {{-- <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="select_category" class=" form-control-label">Select Category</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select name="select_category" id="select" class="form-control" value="{{ old('select_category') }}">
                                @foreach($categorys as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                            @error('select_category')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div> --}}



                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="select_category" class=" form-control-label">Select sub_Catigory</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select name="select_sub" id="select" class="form-control" value="{{ old('select_sub') }}">
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
                            <input type="text" id="text-input" name="name"  class="form-control"
                                   value="{{ old('name') }}" >
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
                            <textarea name="desc" id="textarea-input" rows="9" class="form-control">{{ old('desc') }}</textarea>
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
                            <input id="cc-name"  value="{{ old('price') }}" name="price" type="text"
                                   class="form-control cc-name valid">
                            @error('price')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    {{-- <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="cc-name" class="control-label mb-1">quantity</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input id="cc-name"  value="{{ old('quantity') }}" name="quantity" type="text"
                                   class="form-control cc-name valid">
                            @error('quantity')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div> --}}
                    {{-- <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="cc-name" class="control-label mb-1">priority</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input id="cc-name"  value="{{ old('priority') }}" name="priority" type="text"
                                   class="form-control cc-name valid">
                            @error('priority')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div> --}}


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
                    <button style="background-color: orange;border-color:orange" id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                        <span id="payment-button-amount">Create Product</span>
                    </button>
                </div>
            </div>
        </div>
        </form>
    </div>


    <div class="row m-t-30">
        <div class="col-md-12">
            <!-- DATA TABLE-->
            <div class="table-responsive m-b-40">
                <div class="card-header text-center bg-light justify-content-center"><strong>Product Table</strong></div>
                <table class="table table-borderless table-data3">
                    <thead class="bg-info">
                    <tr style="background-color: orange;border-color:orange;color:white">
                        <th>ID</th>
                        <th>Sub Name</th>
                        <th>product Name</th>
                        <th>description</th>
                        <th>price</th>
                        <th>Image</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>

                        @foreach($products as $product)
                           <tr>
                               <td>{{$product->id}}</td>
                               <td>{{$product->getsubcategoryname()}}</td>
                               <td>{{$product->name}}</td>
                               <td>{{$product->desc}}</td>
                               <td>{{$product->price}}</td>
                               <td><img src="{{asset("uploads/images/$product->image")}}"></td>
                               <td><a class="text-primary" href="/dashboard/manage_product/{{$product->id}}/edit"><span
                                           class="btn btn-primary">edit</span></a></td>
                               <td class="text-primary"><a class="text-danger" href="/dashboard/manage_product/{{$product->id}}"><span
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
