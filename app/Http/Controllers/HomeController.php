<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $viewBag['products'] = Product::all();
        return view('home',$viewBag);
    
  
    }
    public function viewProduct( Request $request ,$id)
    {
        $id= $request->id;
        // dd($id);
        $viewBag['products'] = Product::where('id','=',$id)->first();
        return view('single-product',$viewBag);
    
  
    }
}
