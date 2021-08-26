<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $products=Product::latest()->get()->take(6);
        return view('frontend.layouts.home',compact('products'));
    }

    public function shoes()
    {
        return view('frontend.layouts.shoes');
    }
}
