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
// Add other routes as needed
