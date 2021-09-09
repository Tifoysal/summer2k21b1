<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function viewProduct($id)
    {
        $product=Product::find($id);
        $allProducts=Product::get()->take(4);

        return view('frontend.layouts.singleProduct',compact('product','allProducts'));
    }
}
