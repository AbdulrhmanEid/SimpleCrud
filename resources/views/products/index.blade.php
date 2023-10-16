@extends('layouts.app')
@section('title')
Home Page

@endsection
@section('basic-section')
<section class="container my-5">
    <h1 class="text-center text-danger">Welcome To Our Website</h1>
    <h4 class="my-2 text-center"> Here You Can See Our Latest products</h4>
    <div class="row">
        @foreach ($products as $product)
        <div class="col-md-4 mb-2">
            <div class="card" >
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$product->name  }}</h5>
                  <p class="card-text">{{$product->description  }}</p>
                  <a href="{{route('show',$product->id) }}" class="btn btn-success">details</a>
                  <a href="{{route('edit',$product->id) }}" class="btn btn-warning">Edit</a>
                  <a href="{{route('destroy',$product->id) }}" class="btn btn-danger">delete</a>
                </div>
              </div>
        </div>

        @endforeach



    </div>
</section>
@endsection
