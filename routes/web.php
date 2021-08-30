<?php

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Frontend\HomeController as FrontendHome;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Backend\UserController as BackendUser;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//www.summer.com
//localhost/projectname/public/category

Route::get('/',[FrontendHome::class,'home'])->name('home');
Route::get('/shoes',[FrontendHome::class,'shoes'])->name('shoes');

Route::get('/signup',[UserController::class,'signupForm'])->name('user.signup');
Route::post('/signup/store',[UserController::class,'signupFormPost'])->name('user.signup.store');


//admin panel routes
Route::get('/admin/login',[BackendUser::class,'login'])->name('admin.login');
Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){

    Route::get('/',[HomeController::class,'home']);
    Route::get('/contact',[HomeController::class,'contact']);

    Route::get('/categories',[CategoryController::class,'list'])->name('category.list');
    Route::get('/category/create',[CategoryController::class,'create'])->name('category.create');
    Route::post('/category/store',[CategoryController::class,'store'])->name('category.store');
    Route::get('/category/{id}/products',[CategoryController::class,'allProduct'])->name('category.product');

    Route::get('/products',[ProductController::class,'list'])->name('product.list');
    Route::post('/products/store',[ProductController::class,'store'])->name('product.store');

    Route::get('/customers',[BackendUser::class,'customerList'])->name('customer.list');
    Route::get('/users',[BackendUser::class,'userList'])->name('user.list');
});

// uri, controller,method

//model
//view
//route
//controller
    //method

