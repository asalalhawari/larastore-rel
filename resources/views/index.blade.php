@extends('layouts.app')

<h1 class="text-center my-4">Products List</h1>
<a href="{{ route('create') }}" class="btn btn-primary mb-3">Add New Product</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->product_name }}</td>
            <td>{{ $product->product_description }}</td>
            <td>{{ $product->product_price }}</td>
            <td>
                <a href="{{ route('edit', $product->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('destroy', $product->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
