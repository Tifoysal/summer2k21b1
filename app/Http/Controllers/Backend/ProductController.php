<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function list()
    {
//        dd("ok");
        //eager load
        //lazy load

        $products=Product::with('category')->paginate(10);
//        dd($products);
        $categories=Category::all();
        return view('backend.layouts.product.list',compact('products','categories'));
    }

    public function store(Request $request)
    {
        $fileName='';
            if($request->hasFile('product_image'))
            {
                $file=$request->file('product_image');
               //generate file name here
                $fileName=date('Ymdhms').'.'.$file->getClientOriginalExtension();
                $file->storeAs('/uploads',$fileName);
            }


        Product::create([
            'category_id'=>$request->category_id,
            'name'=>$request->product_name,
            'price'=>$request->product_price,
            'description'=>$request->description,
            'image'=>$fileName
        ]);

        return redirect()->back();
    }
}
