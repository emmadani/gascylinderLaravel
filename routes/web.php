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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/Dashboard', function () {
    return view('Dashboard');
});
Route::get('/Form', function () {
    return view('form');
});
// / means directly redirect to this page
Route::get('/', 'App\Http\Controllers\ProductController@index');
Route::get('/create', 'App\Http\Controllers\ProductController@create');
Route::post('/', 'App\Http\Controllers\ProductController@store');
Route::get('/show/{id}', 'App\Http\Controllers\ProductController@show');
Route::delete('/{id}', 'App\Http\Controllers\ProductController@destroy');
 Route::get('/edit/{id}', 'App\Http\Controllers\ProductController@edit');

 Route::put('/', 'App\Http\Controllers\ProductController@update');
//  Route::get('/delete/{id}', 'App\Http\Controllers\ProductController@destroy');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
