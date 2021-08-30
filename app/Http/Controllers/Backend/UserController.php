<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function login()
    {
        return view('backend.layouts.login');
    }

    public function customerList()
    {
        $user=User::where('role','=','customer')->get();
        return view('backend.layouts.customer',compact('user'));
    }

    public function userList()
    {

        $user=User::where('role','!=','customer')->get();
        return view('backend.layouts.user',compact('user'));
    }
}
