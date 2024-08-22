@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center my-4">Create New Product</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('store') }}" method="POST">
        @csrf
        
        <div class="form-group">
            <label for="product_name">Product Name:</label>
            <input type="text" name="product_name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="product_description">Product Description:</label>
            <textarea name="product_description" class="form-control" required></textarea>
        </div>

        <div class="form-group">
            <label for="product_price">Product Price:</label>
            <input type="number" name="product_price" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="category_id">Category:</label>
            <select name="category_id" id="category_id" class="form-control">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Create Product</button>
    </form>
</div>
@endsection
