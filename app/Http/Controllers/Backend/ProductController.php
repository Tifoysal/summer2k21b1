<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list()
    {
        $products=Product::all();
//        dd($products);
        return view('backend.layouts.product.list',compact('products'));
    }

    public function store(Request $request)
    {
//        dd($request->all());
        Product::create([
            'category_id'=>1,
            'name'=>$request->product_name,
            'price'=>$request->product_price,
            'description'=>$request->description
        ]);

        return redirect()->back();
    }
}
