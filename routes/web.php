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

//redirect any request to admin

/*Route::get('/posts/{post?}/comments/{comment?}', function ($postId = NULL, $commentId = NULL) {
    //
	echo $postId.'<br/>';
	echo $commentId;
});*/
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', function () {
	//echo Hash::make('12345');
	
    return view('login');
});
// Route::get('/logout', function () {
// 	//echo Hash::make('12345');
// 	Session::forget('user');
//     return redirect('/login');
// });
// Route::view('/register','register');
// Route::get('admin/dashboard', 'Dashboard@initContent');
// Route::post('/register', [UserController::class,'register']);
Route::post('/login', [UserController::class,'login']);
// Route::get('/', [ProductController::class,'index']);
// Route::get('/detail/{id}', [ProductController::class,'detail']);
// Route::post('/add_to_cart', [ProductController::class,'AddToCart']);
// Route::get('/cartlist', [ProductController::class,'cartlist']);
// Route::get('/removecart/{id}', [ProductController::class,'removeCart']);
// Route::get('/ordernow', [ProductController::class,'OrderNow']);
// Route::post('/orderplace', [ProductController::class,'orderPlace']);
// Route::get('/myorders', [ProductController::class,'myOrders']);