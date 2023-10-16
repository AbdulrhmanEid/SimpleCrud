@extends('layouts.app')
@section('title')
Create Product

@endsection
@section('basic-section')
<section class="container my-5">
    <h2 class="text-center text-danger">Welcome To Our Create Product Page</h2>
    <form method="post" action="{{route('store')  }}">
        @csrf
        <div class="mb-3">
            <label class="form-label">Product Name</label>
            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
            @error('name')
            <div class="alert alert-danger" role="alert">
               {{ $message }}
              </div>
            @enderror

        </div>
        <div class="mb-3">
            <label class="form-label">Product Price</label>
            <input type="text" class="form-control" name="price" value="{{ old('price') }}">
            @error('price')
            <div class="alert alert-danger" role="alert">
             {{ $message }}
              </div>
            @enderror


        </div>
        <div class="mb-3">
            <label class="form-label">Product Quantity</label>
            <input type="text" class="form-control" name="quantity" value="{{ old('quantity') }}">
            @error('quantity')
            <div class="alert alert-danger" role="alert">
              {{ $message }}
              </div>
            @enderror

        </div>
        <div class="mb-3">
            <label class="form-label">Product Desc</label>
            <textarea type="text" class="form-control" name="description"></textarea>
        </div>
        <button type="submit" class="btn btn-danger">Add Product</button>
    </form>
</section>
@endsection
