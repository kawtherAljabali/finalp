@extends('pub_layouts.public_main')

@section('title')
@endsection


@section('content')


<h1 style="text-align: center; color:orange;   margin-top: 75px
">Thank you the   {{Auth::user()->name}}  Order is sucssesful</h1>
@endsection
