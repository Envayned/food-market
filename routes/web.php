<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/products', function(){
   return view('products', [
       'products' => Product::all()
   ]);
})->middleware(['auth'])->name("products");

Route::get('/product', function(){
    return view('product', [
        ProductController::class, 'show'
    ]);
});


Route::get('/product/{id}', [ProductController::class, 'show']);
