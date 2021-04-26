@extends('dashboard_layouts.admin_main')

@section('content')

                <div class="row m-t-30">
                    <div class="col-md-12">
                        <!-- DATA TABLE-->
                        <div class="table-responsive m-b-40">
                            <div class="card-header text-center bg-light"><strong>message Table</strong></div>
                            <table class="table table-borderless table-data3" >
                                <thead class="bg-info" style="background-color: orange !important">
                                <tr>
                                    <th>ID</th>
                                    <th>User Name</th>
                                    <th>User  last Name</th>
                                    <th>User Email</th>
                                    <th>User Phone</th>
                                    <th>msg</th>

                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($Contact as $Contact)
                                <tr>
                                    <td>{{$Contact->id}}</td>
                                    <td>{{$Contact->name}}</td>
                                    <td>{{$Contact->last_name}}</td>

                                    <td>{{$Contact->email}}</td>
                                    <td>{{$Contact->phone}}</td>
                                    <td>{{$Contact->msg}}</td>
                                    <td class="text-primary"><a class="text-danger" href="/dashboard/msg/{{$Contact->id}}"><span
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
