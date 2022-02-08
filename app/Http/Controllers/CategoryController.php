<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    
    public function index()
    {
        $viewBag['categorys'] = Category::latest()->paginate('5');
     
               return view('category.index', $viewBag)->with(request()->input('page'));
        // return view('category.index');
    }      

  
    public function create()
    {
        return view('category.create');
    }

    
    public function store(Request $request)
    {
        //   dd($request);
        $validated = $request->validate([
            'category_name' => 'required',
        ]);
        Category::create($request->all());

        return redirect()->route('categorys.index')->with('success', 'Product create Successfully ');
    }

   
    public function show(Category $category)
    {
        return view('category.show',compact('category'));
    }

    
    public function edit(Category $category)
    {
        return view('category.edit',compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        // dd($request);
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
