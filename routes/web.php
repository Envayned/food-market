<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;

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
});

//Route::get('/product', function($id){
//    return view('product', [
//        'product' => Product::findOrFail($id)
//    ]);
//});

Route::get('/product', function(){
    return view('product', [
        'product' => '<h1>Hello world</h1>'
    ]);
});
