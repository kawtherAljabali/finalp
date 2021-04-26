@extends('dashboard_layouts.admin_main')

@section('content')

                <div class="row m-t-30">
                    <div class="col-md-12">
                        <!-- DATA TABLE-->
                        <div class="table-responsive m-b-40">
                            <div class="card-header text-center bg-light"><strong> Mnamge post</strong></div>
                            <table class="table table-borderless table-data3">
                                <thead class="bg-info">
                                <tr style="background-color: orange;border-color:orange;color:white">
                                    <th>post</th>
                                    <th>image</th>
                                    <th>created_at</th>
                                    <th>updated_at</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($face as $face)
                                 <tr>
                                    <td>{{$face->post}}</td>
                                    <td>{{$face->image}}</td>
                                    <td>{{$face->created_at}}</td>
                                    <td>{{$face->updated_at}}</td>
                                    <td class="text-primary"><a class="text-danger" href="/dashboard/manage_public{{$face->id}}"><span
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
