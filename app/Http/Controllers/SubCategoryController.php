<?php

namespace App\Http\Controllers;

use App\Models\SubCategory;
use App\Models\Category;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
  
    public function index()
    {
    // $subCategories = Category::all();
    //      return  $subCategories;
     $viewBag['subCategorys'] = SubCategory::all();

        return view('subCategory.index',$viewBag);
    }

 
    public function create()
    {
        $viewBag['categorys'] = Category::all();
        return view('subCategory.create',$viewBag);
    }

 
    public function store(Request $request)
    {
        // dd($request);
        $validated = $request->validate([
            'category_id' => 'required',
            'SubCategory_name' => 'required',
        ]);
        SubCategory::insert([
            'category_id' => $request->category_id,
            'SubCategory_name' => $request->SubCategory_name,
        ]);
        return redirect()->route('subCategorys.index')->with('success', 'sub Category create Successfully ');
    }

 
    public function show(SubCategory $subCategory)
    {
       $viewBag['subCategorys'] = $subCategory;
        return view('subCategory.show', $viewBag);
    }

    public function edit(SubCategory $subCategory)
    {
        //
    }

 
    public function update(Request $request, SubCategory $subCategory)
    {
        //
    }

  
    public function destroy(SubCategory $subCategory)
    {
        //
    }
}
