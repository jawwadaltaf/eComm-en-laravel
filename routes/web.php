<?php

use Illuminate\Support\Facades\Route;
//use Illuminate\support\Facades\Hash;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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

Route::get('/login', function () {
	//echo Hash::make('12345');
	
    return view('login');
});
Route::get('/logout', function () {
	//echo Hash::make('12345');
	Session::forget('user');
    return redirect('/login');
});
Route::post('/login', [UserController::class,'login']);
Route::get('/', [ProductController::class,'index']);
Route::get('/detail/{id}', [ProductController::class,'detail']);
Route::post('/add_to_cart', [ProductController::class,'AddToCart']);
Route::get('/cartlist', [ProductController::class,'cartlist']);
