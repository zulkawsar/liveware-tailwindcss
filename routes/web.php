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

// Route::get('/shop', function () {
//     return view('welcome');
// });
Route::get('/{name}', 'DefaultController@index')->name('default');
Route::get('/{name}/{slug}', 'DefaultController@index')->name('slug');
Route::get('/{name}/category/{category}', 'DefaultController@index')->name('category');