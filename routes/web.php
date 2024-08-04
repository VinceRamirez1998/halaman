<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});


Route::view('/home', 'index');
Route::view('/about', 'about');
Route::view('/service', 'service');
Route::view('/product', 'product');
Route::view('/contact', 'contact');
Route::view('/blog', 'blog');
Route::view('/detail', 'detail');
Route::view('/feature', 'feature');
Route::view('/team', 'team');
Route::view('/testimonial', 'testimonial');
Route::view('/login', 'login');
Route::view('/myCart', 'myCart');
Route::view('/productView', 'productView');
Route::view('/checkout', 'checkout');
Route::view('/profile', 'profile');
// Add other routes as needed

Auth::routes();

Route::get('/index', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
