<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function welcome() {

        $products = Product::orderBy('created_at', 'desc')->take(6)->get();

        return view('welcome', compact('products'));
    }

    public function show(Category $category){
        return view('category.show', compact('category'));
    }


    public function searchProducts(Request $request)
    {
        $products = Product::search($request->searched)->where('is_accepted', true)->paginate(10);
        return view('products.index', compact('products'));
    }


}

