<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\UserController;
use App\Models\User;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Favorite;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/users', function(){
    return new JsonResponse([
        'data' => User::get()
    ]);
})/*->middleware('auth')*/->name('api-users');

// implicit route binding (using a model's variable that matches with the URI field)
Route::get('/users/{id}', function(User $id){
   return new JsonResponse([
       'data' => $id
   ]);
});

// finds all the products in the database
Route::get('/products', function(){
   return new JsonResponse([
       'data' => Product::get()
   ]);
});

// finds all the products based on their id
Route::get('/products/{id}', function (Product $id){
   return new JsonResponse([
       'data' => $id
   ]);
});

//finds all the carts from the database
Route::get('/carts', function(){
   return new JsonResponse([
       'data' => Cart::with(['product', 'user'])
           ->get()
   ]) ;
});

//finds all the carts based on ID
Route::get('/carts/{id}', function ($id){
   return new JsonResponse([
       'data' => Cart::where('user_id', $id)
           ->with(['product', 'user'])
           ->get()
   ]) ;
});

// finds all the favorites
Route::get('/favorites', function(){
   return new JsonResponse([
      'data' => Favorite::with(['product', 'user'])->get()
   ]);
});

// can find all the favorites based on user ID
Route::get('/favorites/{userId}', function($userId){
   return new JsonResponse([
       'data' => Favorite::where('user_id', $userId)
           ->with(['product', 'user'])
           ->get()
   ]);
});


