@extends('dashboard_layouts.admin_main')
@section('title')
    Order Details
@stop
@section('content')
    <div class="row m-t-30">
        <div class="col-md-12">
            <div class="table-responsive m-b-40">
                <div class="card-header text-center bg-light"><strong>Order Details</strong></div>
                <table class="table table-borderless table-data3">
                    <thead class="bg-info">
                    <tr style="background-color: orange;border-color:orange">
                        <th>#</th>
                        <th>Product</th>
                        <th>Qty</th>
                        <th>Price</th>
                    </tr>
                    </thead>
                    <tbody>
                     @foreach($items as $key => $get)
                     <tr>
                        <td style="vertical-align: middle;">{{ $key + 1 }}</td>
                        <td style="vertical-align: middle;">{{ $get->product->name }}</td>
                        <td style="vertical-align: middle;">{{ $get->quantity }}</td>
                        <td style="vertical-align: middle;">{{ $get->price }} JD</td>
                    </tr>
                     @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
