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

//login here
Route::get('/login',[UserController::class,'login'])->name('customer.login');
Route::post('/login/post',[UserController::class,'doLogin'])->name('customer.do.login');

Route::get('/signup',[UserController::class,'signupForm'])->name('user.signup');
Route::post('/signup/store',[UserController::class,'signupFormPost'])->name('user.signup.store');

Route::group(['prefix'=>'customer','middleware'=>'auth'],function (){
    Route::get('/logout',[UserController::class,'logout'])->name('customer.logout');
});




//admin panel routes
Route::get('/admin/login',[BackendUser::class,'login'])->name('admin.login');
Route::post('/admin/login/post',[BackendUser::class,'loginPost'])->name('admin.login.post');

Route::group(['prefix'=>'admin','middleware'=>['auth','role']],function(){

    Route::get('/',[HomeController::class,'home'])->name('dashboard');
    Route::get('/logout',[BackendUser::class,'logout'])->name('logout');

    Route::get('/contact',[HomeController::class,'contact']);

    Route::get('/categories',[CategoryController::class,'list'])->name('category.list');
    Route::get('/category/create',[CategoryController::class,'create'])->name('category.create');
    Route::post('/category/store',[CategoryController::class,'store'])->name('category.store');
    Route::get('/category/{id}/products',[CategoryController::class,'allProduct'])->name('category.product');

    //products
    Route::get('/products',[ProductController::class,'list'])->name('product.list');
    Route::get('/products/delete/{id}',[ProductController::class,'delete'])->name('product.delete');
    Route::get('/products/edit/{id}',[ProductController::class,'edit'])->name('product.edit');
    Route::put('/products/update/{id}',[ProductController::class,'update'])->name('product.update');
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

