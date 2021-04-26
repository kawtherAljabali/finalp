@extends('dashboard_layouts.admin_main')
@section('title')
    Orders
@stop
@section('content')
    <div class="row m-t-30">
        <div class="col-md-12">
            <div class="table-responsive m-b-40">
                <div class="card-header text-center bg-light"><strong>User Order</strong></div>
                <table class="table table-borderless table-data3">
                    <thead class="bg-info">
                    <tr style="background-color: orange;border-color:orange">
                        <th>Order ID</th>
                        <th>Username</th>
                        <th>Items Count</th>
                        <th>Total Price</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                     @foreach($data as $get)
                     <tr>
                        <td style="vertical-align: middle;">#{{ $get->id }}</td>
                        <td style="vertical-align: middle;">{{ $get->user->name }}</td>
                        <td style="vertical-align: middle;">{{ $get->items_count }}</td>
                        <td style="vertical-align: middle;">{{ $get->total }} JD</td>
                        <td style="vertical-align: middle;"><a class="text-primary" href="{{ url('dashboard/mangeorder/' . $get->id) }}"><span class="btn btn-warning">Details</span></a></td>
                    </tr>
                     @endforeach
                    </tbody>
                </table>
                {{ $data->links() }}
            </div>
        </div>
    </div>
@endsection
