<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use File;


class ProductController extends Controller
{

    public function index()
    {
        $viewBag['products'] = Product::all();
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

        $validated = $request->validate([
            'name' => 'required',
            'detail' => 'required',
            'product_img' => 'image|required|mimes:jpeg,png,jpg,gif,svg',
        ]);


        $photo = $request->product_img;
        $photoname = uniqid() . '.' . $photo->getClientOriginalExtension();
        Image::make($photo)->resize(320, 240)->save(public_path('files/images/' . $photoname));

        Product::insert([
            'user_id' => $request->user_id,
            'category_id' => $request->category_id,
            'name' => $request->name,
            'detail' => $request->detail,
            'product_img' => 'files/images/' . $photoname,
        ]);

        return redirect()->route('products.index')->with('success', 'Product Add Successfully ');
    }


    public function show(Product $product)
    {
        $viewBag['products'] = $product;
        return view('products.show', $viewBag);
    }


    public function edit(Product $product)
    {
        $viewBag['users'] = User::all();
        $viewBag['categories'] = Category::all();
        $viewBag['products'] = $product;
        return view('products.edit',  $viewBag);
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
        $oldImage = $request->oldImage;
        $photo = $request->product_img;
        if ($photo) {
            $photoname = uniqid() . '.' . $photo->getClientOriginalExtension();
            Image::make($photo)->resize(320, 240)->save(public_path('files/images/' . $photoname));

            $product->category_id = $request->category_id;
            $product->name = $request->name;
            $product->detail = $request->detail;
            $product->product_img = 'files/images/' . $photoname;
            if ($product->isDirty()) {
                $product->update();
            }

            unlink($oldImage);

            return redirect()->route('products.index')
                ->with('success', 'Product updated successfully');
        } else {
            $product->category_id = $request->category_id;
            $product->name = $request->name;
            $product->detail = $request->detail;
            if ($product->isDirty()) {
                $product->update();
            }

            return redirect()->route('products.index')
                ->with('success', 'Product updated successfully');
        }
    }



    public function destroy(Product $product)
    {
        unlink($product->product_img);
        $product->delete();

        return redirect()->route('products.index')
            ->with('success', 'Product deleted successfully');
    }
}
