<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/articles', 'apicontroller@index');
Route::get('/articles/{id}', 'apicontroller@show');
Route::post('/articles', 'apicontroller@create');
Route::put('articles/{id}', 'apicontroller@update1');
Route::delete('/articles/{id}', 'apicontroller@delete');

// Route::get('/articles', 'apicontroller@index');
// Route::get('/articles/{id}', 'apicontroller@show');
// Route::post('/articles', 'apicontroller@create');
// Route::put('articles/{id}', 'apicontroller@update1');
// Route::delete('articles/{id}', 'apicontroller@delete1');


