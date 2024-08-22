<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('index', compact('products'));
    }
    public function create()
    {
        return view('products.create', compact('categories'));
    }

    public function store(Request $request)
{
    $validatedData = $request->validate([
        'product_name' => 'required|string|max:255',
        'product_description' => 'required|string',
        'product_price' => 'required|numeric',
    ]);

    Product::create($validatedData);

    return redirect()->route('index');
}


    public function edit($id)
    {
        $product = Product::find($id);
        return view('edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->update($request->all());
        return redirect()->route('index');
    }

    public function destroy($id)
    {
        Product::destroy($id);
        return redirect()->route('index');
    }
    


}
