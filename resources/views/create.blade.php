@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center my-4">Add New Product</h1>

    <form action="{{ route('store') }}" method="POST" class="w-50 mx-auto">
        @csrf

        <!-- Product Name -->
        <div class="form-group">
            <label for="product_name">Product Name:</label>
            <input type="text" name="product_name" class="form-control" id="product_name" required>
        </div>

        <!-- Product Description -->
        <div class="form-group">
            <label for="product_description">Product Description:</label>
            <textarea name="product_description" class="form-control" id="product_description" required></textarea>
        </div>

        <!-- Product Price -->
        <div class="form-group">
            <label for="product_price">Product Price:</label>
            <input type="number" name="product_price" class="form-control" id="product_price" required>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-success">Add Product</button>
    </form>
</div>

