@extends('dashboard_layouts.admin_main')

@section('content')

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header" style="background-color: orange;border-color:orange;color:white">
                Manage Sub Catigory
            </div>
            <div class="card-body card-block">
                <div class="card-title">
                    <h3 class="text-center title-2">Create Sub  Catigory</h3>
                </div>
                <hr>
                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <div class="form-group has-success">
                        
                    </div>
                    @csrf
                    <div class="row form-group">
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
                    </div>

                 
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">sub Name</label>
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
                        <span id="payment-button-amount">Create Sub Catigory</span>
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
                <div class="card-header text-center bg-light justify-content-center"><strong>sub Table</strong></div>
                <table class="table table-borderless table-data3">
                    <thead class="bg-info">
                    <tr style="background-color: orange;border-color:orange">
                        <th>ID</th>
                        <th>Category Name</th>
                        <th>sub Name</th>
                        <th>Image</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>

                        @foreach($subcatigory as $subcatigory)
                           <tr>
                               <td>{{$subcatigory->id}}</td>
                               <td>{{$subcatigory->getcategoryname()}}</td>
                               <td>{{$subcatigory->name}}</td>
                               
                               <td><img src="{{asset("uploads/images/$subcatigory->image")}}"</td>
                               <td><a class="text-primary" href="/dashboard/manage_sub/{{$subcatigory->id}}/edit"><span
                                           class="btn btn-primary">edit</span></a></td>
                               <td class="text-primary"><a class="text-danger" href="/dashboard/manage_sub/{{$subcatigory->id}}"><span
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
