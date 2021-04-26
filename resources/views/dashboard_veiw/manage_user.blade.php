@extends('dashboard_layouts.admin_main')

@section('content')

                <div class="row m-t-30">
                    <div class="col-md-12">
                        <!-- DATA TABLE-->
                        <div class="table-responsive m-b-40">
                            <div class="card-header text-center bg-light"><strong>User Table</strong></div>
                            <table class="table table-borderless table-data3">
                                <thead class="bg-info">
                                <tr  style="background-color: orange;border-color:orange">
                                    <th>ID</th>
                                    <th>User Name</th>
                                    <th>User lname</th>
                                    <th>User Email</th>
                                    <th>User Phone</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->lname}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->phone}}</td>
                                    {{-- <td><a class="text-primary" href="/dashboard/manage_user/{{$user->id}}/edit"><span class="btn btn-primary">edit</span></a></td> --}}
                                    <td class="text-primary"><a class="text-danger" href="/dashboard/manage_user/{{$user->id}}"><span
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
