<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\UserController;
use App\Models\User;
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
});

// implicit route binding (using a model's variable that matches with the URI field)
Route::get('/users/{id}', function(User $id){
   return new JsonResponse([
       'data' => $id
   ]);
});

Route::post('/users', function(){

});

Route::patch('/users/{id}', function(User $id){

});

Route::delete('/users/{id}', function(User $id){

});
