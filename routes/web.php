<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/products', function () {
    return view('products-view');
});
//Product Route
Route::resource('/products', 'App\Http\Controllers\ProductController')->middleware('authproducts');

// Login Registration Routes
Route::get('/login',[ 'App\Http\Controllers\CustomAuthController', 'login'])->middleware('alreadyLoggedIn');
Route::get('/registration',[ 'App\Http\Controllers\CustomAuthController', 'registration'])->middleware('alreadyLoggedIn');
Route::post('/register-user', ['App\Http\Controllers\CustomAuthController', 'registerUser'])->name('register-user');
Route::post('/login-user', ['App\Http\Controllers\CustomAuthController', 'loginUser'])->name('login-user');
Route::get('/dashboard', ['App\Http\Controllers\CustomAuthController', 'dashboard'])->middleware('isLoggedIn');
Route::get('/logout', ['App\Http\Controllers\CustomAuthController', 'logout']);

function getUser() {
    $data = false;
    if (Session::has('loginId')) {
        $data = \App\Models\User::where('id', '=', Session::get('loginId'))->first();  
    }
    return $data;
}