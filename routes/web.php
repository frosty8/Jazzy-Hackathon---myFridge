<?php

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
Route::get('/fridge', 'Products@index');

Route::get('/prepares', function (){

    return view('prepare');
});
Route::get('/recipe', function (){

    return view('recipe');
});

Route::post('/posts', 'Products@show');

