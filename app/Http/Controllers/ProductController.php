<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
  $products=Product::latest()->paginate('10');
//   return json_decode('$product');
  return view('products.index',compact('products'))->with(request()->input('page'));

    }

    public function create()
    {
        return view('products.create');
    }

   
    public function store(Request $request)
    {
    //    dd($request);
        $validated = $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
    Product::create($request->all());

    return redirect()->route('products.index')->with('success','Product create Successfully ');

    }

  
    public function show(Product $product)
    {
        return view('products.show',compact('product'));
    }

  
    public function edit(Product $product)
    {
        return view('products.edit',compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);

        $product->update($request->all());

        return redirect()->route('products.index')
                        ->with('success','Product updated successfully');
    }
  

   
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')
                        ->with('success','Product deleted successfully');
    }
}
