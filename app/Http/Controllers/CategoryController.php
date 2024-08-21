<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
    public function index()
{
    $categories = Category::all();
    return view('categories.index', compact('categories'));
}


    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        Category::create($request->all());
        return redirect()->route('categories.index');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->update($request->all());
        return redirect()->route('categories.index');
    }

    public function destroy($id)
    {
        Category::destroy($id);
        return redirect()->route('categories.index');
    }
}
