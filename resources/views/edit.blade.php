@extends('layouts.app')

<h1 class="text-center my-4">Edit Product</h1>
<form action="{{ route('update', $product->id) }}" method="POST" class="w-50 mx-auto">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="product_name">Product Name:</label>
        <input type="text" class="form-control" id="product_name" name="product_name" value="{{ $product->product_name }}">
    </div>
    <div class="form-group">
        <label for="product_description">Product Description:</label>
        <textarea class="form-control" id="product_description" name="product_description">{{ $product->product_description }}</textarea>
    </div>
    <div class="form-group">
        <label for="product_price">Product Price:</label>
        <input type="number" class="form-control" id="product_price" name="product_price" value="{{ $product->product_price }}">
    </div>
    <button type="submit" class="btn btn-warning">Update Product</button>
</form>
