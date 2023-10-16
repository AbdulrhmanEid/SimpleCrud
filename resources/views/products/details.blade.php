@extends('layouts.app')
@section('title')
Product Info

@endsection
@section('basic-section')
<section class="container my-5">
    <div class="row">
        <div class="col-md-6"></div>
        <div class="col-md-6 text-center">
            <h2>Name : {{$product->name }}</h2>
            <h3 class="text-bold"> Price : {{$product->price }}</h3>
            <h3>Quantity :  {{$product->quantity  }}</h3>
            <p>{{$product->description  }}</p>
        </div>
    </div>
   </section>

@endsection
