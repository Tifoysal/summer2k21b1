<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $title='Dashboard';
        $link='Dashboard / home';
        return view('backend.layouts.home',compact('title','link'));
    }

    public function contact()
    {
        return view('backend.layouts.contact');
    }
}
