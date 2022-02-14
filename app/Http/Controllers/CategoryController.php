<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $viewBag['categories'] = Category::all();

        return view('category.index', $viewBag);
    }


    public function create()
    {
        return view('category.create');
    }


    public function store(Request $request)
    {
        
        $validated = $request->validate([
            'category_name' => 'required',
        ]);
        Category::insert([
            'category_name' => $request->category_name,
        ]);
        return redirect()->route('categorys.index')->with('success', 'Product create Successfully ');
    }


    public function show(Category $category)
    {
        $viewBag['categories'] = $category;
        return view('category.show', $viewBag);
    }


    public function edit(Category $category)
    {
        $viewBag['category'] = $category;
        return view('category.edit', $viewBag);
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'category_name' => 'required',
        ]);

        $category->update($request->all());

        return redirect()->route('categorys.index')
            ->with('success', 'category updated successfully');
    }


    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('categorys.index')
            ->with('success', 'category deleted successfully');
    }
}
