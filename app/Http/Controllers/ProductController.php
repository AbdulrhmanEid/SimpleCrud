<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index',['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        $date = $request->all();
        $product = new Product();
        $product->create($date);
        return redirect('/');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
       $product = Product::findorfail($id);
       return view('products.details',['product'=>$product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $product = Product::findorfail($id);
        return view('products.edit',['product'=>$product]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $date = $request->all();
        $product = new Product();
        $product = Product::findorfail($id);
        $product->update($date);
        return Redirect('/');




    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $id)
    {
        $id->delete();
        return redirect('/');
    }
}
