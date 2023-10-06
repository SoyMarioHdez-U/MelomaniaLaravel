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


Route::get('/images/logo.png', function () {
    return asset('images/logo.png');
})->name('logo.image');

Route::get('/css/style.css', function () {
    return asset('css/style.css');
})->name('css');


Route::get('/', 'HomeController@index')->name('home');




Route::get('/', function () {
    return view('registro');
});

Route::get('/', function () {
    return view('tienda');
});


