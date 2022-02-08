<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{
 
    public function index()
    {
        $viewBag['products'] = Product::latest()->paginate('5');
    //     $viewBag['user'] = User::findOrFail(1)->products;
    //     return $viewBag['user'];
    // return 'hello';
           return view('products.index', $viewBag)->with(request()->input('page'));
    
  
    }

    public function create()
    {
        $viewBag['users'] = User::all();
        $viewBag['categorys'] = Category::all();
        return view('products.create',  $viewBag);
    }


    public function store(Request $request)
    {
//   dd($request);
        $validated = $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
        // Product::create($request->all());
        Product::insert([
            'user_id'=> $request->user_id,
           'category_id'=> $request->category_id,
           'name'=> $request->name,
           'detail'=>$request->detail,
    ]);

        return redirect()->route('products.index')->with('success', 'Product create Successfully ');
    }


    public function show(Product $product)
    {
        $user = User::all();
        return view('products.show', compact('product', 'user'));
    }


    public function edit(Product $product)
    {
        $user = User::all();
        $Categorys=Category::all();  
        return view('products.edit', compact('product', 'user','Categorys'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);

        $product->update($request->all());

        return redirect()->route('products.index')
            ->with('success', 'Product updated successfully');
    }



    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')
            ->with('success', 'Product deleted successfully');
    }
}
