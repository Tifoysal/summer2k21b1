<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function signupForm()
    {
        return view('frontend.layouts.signup');
    }

    public function signupFormPost(Request $request)
    {
        User::create([
           'name'=>$request->customer_name,
           'mobile'=>$request->customer_mobile,
           'email'=>$request->customer_email,
           'role'=>'customer',
           'password'=>bcrypt($request->customer_email),
        ]);

        return redirect()->back()->with('success','User Registration Successful.');

    }
}
