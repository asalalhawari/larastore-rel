@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center my-4">Add New Category</h1>

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="category_name">Category Name:</label>
            <input type="text" name="category_name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="category_description">Category Description:</label>
            <textarea name="category_description" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Add Category</button>
    </form>
</div>
@endsection
