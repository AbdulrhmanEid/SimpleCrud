@extends('layouts.app')

@section('title')
Edit Product

@endsection
@section('basic-section')
<section class="container my-5">
    <h2 class="text-center text-danger">Welcome To Our Update Product Page</h2>
    <form method="post" action="{{route('update',$product->id)  }}">
        @csrf
        <div class="mb-3">
            <label class="form-label">Product Name</label>
            <input type="text" class="form-control" name="name" value="{{$product->name  }}">

        </div>
        <div class="mb-3">
            <label class="form-label">Product Price</label>
            <input type="text" class="form-control" name="price" value="{{$product->price  }}">

        </div>
        <div class="mb-3">
            <label class="form-label">Product Quantity</label>
            <input type="text" class="form-control" name="quantity" value="{{$product->quantity  }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Product Desc</label>
            <textarea type="text" class="form-control" name="description">{{$product->description  }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Update Product</button>
    </form>
</section>
@endsection
