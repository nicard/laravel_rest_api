<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('v1')->middleware(['auth:api', 'tenant', 'bindings'])->group(function(){

    Route::get('/users/me', function(){
        return request()->user();
    });

   Route::resources([
       'products' => 'ProductController',
       'users' => 'UserController'
   ]);
});
Route::get('/cors_example', function(){
    return ['status' => 'ok'];
});


Route::get('rotina/{idRotina}', 'RotinaController@index');
