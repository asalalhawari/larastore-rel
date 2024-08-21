@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center my-4">Edit Category</h1>

    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="category_name">Category Name:</label>
            <input type="text" name="category_name" class="form-control" value="{{ $category->category_name }}" required>
        </div>

        <div class="form-group">
            <label for="category_description">Category Description:</label>
            <textarea name="category_description" class="form-control">{{ $category->category_description }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Update Category</button>
    </form>
</div>
@endsection
