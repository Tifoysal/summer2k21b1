<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function signupForm()
    {
        return view('frontend.layouts.signup');
    }

    public function signupFormPost(Request $request)
    {
//        dd($request->all());
        $request->validate([
            'customer_name'=>'required',
            'customer_email'=>'required|email|unique:users,email',
            'customer_password'=>'required|min:6',
            'customer_mobile'=>'required'
        ]);

        User::create([
           'name'=>$request->customer_name,
           'mobile'=>$request->customer_mobile,
           'email'=>$request->customer_email,
           'role'=>'customer',
           'password'=>bcrypt($request->customer_email),
        ]);

        return redirect()->back()->with('success','User Registration Successful.');

    }

    public function login()
    {
        return view('frontend.layouts.login');
    }

    public function doLogin(Request $request)
    {
        $credentials=$request->except('_token');

        if(Auth::attempt($credentials))
        {
            return redirect()->route('home');
            //user logged in
        }
        return redirect()->back()->with('message','invalid user info.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('customer.login');
    }
}
