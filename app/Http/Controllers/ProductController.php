<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
 
    public function index()
    {
        $viewBag['products'] = Product::latest()->paginate('5');
           return view('products.index', $viewBag);

        }

    public function create()
    {
        $viewBag['users'] = User::all();
        $viewBag['categorys'] = Category::all();
        return view('products.create',  $viewBag);
    }


    public function store(Request $request)
    {
//  dd($request);
        $validated = $request->validate([
            'name' => 'required',
            'detail' => 'required',
            'product_img' => 'image|required|mimes:jpeg,png,jpg,gif,svg',
        ]);


    $slug=Str::slug($request->name, '-');
    $photo=$request->product_img;
    $photoname=$slug.'.'.$photo->getClientOriginalExtension();
    $img = Image::make($photo)->resize(320, 240)->save( public_path('files/images/' .$photoname));

     
// dd( $image);
           Product::insert([
                'user_id'=> $request->user_id,
                'category_id'=> $request->category_id,
                'name'=> $request->name,
                'detail'=>$request->detail,
                'product_img'=> 'files/images/'.$photoname,
                ]);

        return redirect()->route('products.index')->with('success', 'Product Add Successfully ');
    }


    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }


    public function edit(Product $product)
    {
        $viewBag['users']= User::all();
        $viewBag['categorys']=Category::all(); 
        $viewBag['product']= $product;
        return view('products.edit',  $viewBag);
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);

        $product->update([
            'user_id'=> $request->user_id,
           'category_id'=> $request->category_id,
           'name'=> $request->name,
           'detail'=>$request->detail,
         
    ]);

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
