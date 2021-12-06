<?php

use App\Http\Controllers\UserController;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Models\Favorite;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\CartController;

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

Route::get('/users', [UserController::class, 'show'])
    ->middleware('auth')
    ->name("users");

Route::get('/favorites', function(){
   return view('favorites', array(
      'favorites' => Favorite::where('user_id', Auth::id())->get()
   ));
})->middleware(['auth'])->name("favorites");
//
//Route::get('/favorites', [FavoriteController::class, 'getByUserId'])
//    ->middleware('auth')
//    ->name('favorites');

//Route::get('/favorites', function(){
//   return var_dump(auth::id());
//});

Route::get('/favorite/{id}', [FavoriteController::class, 'show'])->middleware(['auth']);

Route::get('/product/{id}', [ProductController::class, 'show'])->middleware(['auth']);

Route::get('/product/{id}/delete', [ProductController::class, 'destroy'])->middleware(['auth']);

Route::get('/favorite/{id}/delete', [FavoriteController::class, 'destroy'])->middleware(['auth']);

Route::get('/favorite/{id}/add', [FavoriteController::class, 'store'])
    ->middleware(['auth'])
    ->name("add-favorite");

Route::get('/cart/{id}/add', [CartController::class, 'store'])
    ->middleware(['auth'])
    ->name("add-cart");

Route::get('/cart/{id}/remove', [CartController::class, 'destroy'])
    ->middleware(['auth'])
    ->name("remove-cart");

Route::get('/user/{id}/delete', [UserController::class, 'destroy'])->middleware(['auth']);

Route::get('/user/delete', [UserController::class, 'deleteUser'])->middleware(['auth'])->name('delete-user');



Route::get('/cart', function(){
    return view('cart', [
        'items' => Cart::all()
    ]);
})->middleware(['auth'])->name("cart");

Route::get('/settings', function () {
    return view('dashboard');
})->middleware(['auth'])->name('settings');

