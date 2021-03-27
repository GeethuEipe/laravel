<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserAuthController;


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

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/welcomes', function () {
    return view('welcomes');
});*/
/*Route::get('/login', function () {
    return view('login');
});*/


/*Route::view("/about",'about');*/

Route::get("users/{name}",[UserController::class,'index']);
Route::get("users",[UserController::class,'about']);
Route::get("users",[UserController::class,'login']);

//work1
Route::view('add','member');
Route::get("insert",[MemberController::class,'memberAdd']);// insert data into table
Route::get("view",[MemberController::class,'lis']);// view datas in table format
Route::get("delete/{id}",[MemberController::class,'delete']);//delete values from table
Route::get("update/{id}",[MemberController::class,'update']);//update datas
Route::post("/update_action",[MemberController::class,'update_action']);


//work2
Route::view('productform','product_form');
Route::get("productinsert",[ProductController::class,'productAdd']);// insert data into table
Route::get("dataview",[ProductController::class,'prolist']);
Route::get("delete/{id}",[ProductController::class,'delete']);
Route::get("update/{id}",[ProductController::class,'proupdates']);
Route::post("productupdate/",[ProductController::class,'productupdate']);

//work3

Route::view("user",'login2');
Route::post("loginform",[ProductController::class,'loginform']);
Route::view("profile",'logwelcome');

//work4

Route::view("userreg",'auth/regst');
Route::view("login",'auth/login3');
Route::get('valid',[UserAuthController::class,'valid']);
Route::get('dashboard',[UserAuthController::class,'dashboard']);
Route::get('check',[UserAuthController::class,'check']);
Route::get('logout',[UserAuthController::class,'logout']);


