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
Route::post('/cartUpdate',"App\Http\Controllers\CartController@update" );

Route::get('/',"App\Http\Controllers\ProduitController@index" );

Route::get('/categori/{id}',"App\Http\Controllers\CategoriController@show" );

Route::get('/produit/{id}',"App\Http\Controllers\ProduitController@show" );

Route::get('/cart/{id}',"App\Http\Controllers\CartController@show" );

Route::post('/order',"App\Http\Controllers\CommandController@store" );

Route::get('/remove/{id}',"App\Http\Controllers\CartController@destroy" );






Route::get('/cart', function () {       
    return view(' cart');
});


Route::get('/product', function () {
    return view(' product');
});
Route::get('/singele', function () {
    return view(' singleprodect ');
});

Route::group(['prefix' => 'admin'], function(){
    Voyager::routes();
});
Route::get('/singel', function () {
    return view(' singelcateg');
});



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::middleware(['auth:sanctum', 'verified'])->get('/checkout', function () {
    return view('checkout');
})->name('checkout');
