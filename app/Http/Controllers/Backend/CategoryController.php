<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function list()
    {
        //get all data from category table
        //DML- select * from categories;
        $categories=Category::all(); // get(), first(),find();

       return view('backend.layouts.category.list',compact('categories'));
    }

    public function create()
    {
        return view('backend.layouts.category.create');
    }

    public function store(Request $request)
    {
       //DML-insert into categories (id, name,description) values('ame','description);
//        left- column name   | right - input field name of form
        Category::create([
            'name'=>$request->category_name,
            'details'=>$request->description
        ]);

        return redirect()->route('category.list');
    }

    public function allProduct($id)
    {
        $products=Product::where('category_id',$id)->get();
//        $category=Category::with('products')->find($id);//using relationshop
//        dd($products);

        return view('backend.layouts.category.product-list',compact('products'));
    }
}
