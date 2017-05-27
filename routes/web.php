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
Route::get('/fridge', function (){
    $products = DB::table('product_table')->get();
    $meats = DB::table('product_table')->get()->where('cat_id', 1);
    $vegetables = DB::table('product_table')->get()->where('cat_id', 2);
    $fruits = DB::table('product_table')->get()->where('cat_id', 5);
    $fishs = DB::table('product_table')->get()->where('cat_id', 3);
    $dairy = DB::table('product_table')->get()->where('cat_id', 4);
    $liquids = DB::table('product_table')->get()->where('cat_id', 6);
    $others = DB::table('product_table')->get()->where('cat_id', 7);

    return view('fridge', compact('products', 'meats', 'vegetables', 'fruits', 'fishs', 'dairy', 'liquids', 'others'));
});
Route::get('/prepares', function (){

    return view('prepare');
});
Route::get('/recipe', function (){

    return view('recipe');
});

