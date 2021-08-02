<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function list()
    {
       return view('backend.layouts.category.list');
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

        return redirect()->back();
    }
}
