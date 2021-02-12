<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'ViewController@homepage');
Route::get('/lihatArtikel/{article}', 'ViewController@lihatArtikel');
Route::get('/add_article', 'ViewController@add_article');
Route::post('create_article', 'ViewController@create_article');
Route::get('/update_article', 'ViewController@listArtikel');
Route::get('/edit_article/{article}', 'ViewController@edit_article');
Route::post('/post_article/{article}', 'ViewController@update_post');
Route::get('/delete_article/{article}', 'ViewController@delete');
