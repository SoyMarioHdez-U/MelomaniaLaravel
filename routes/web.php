<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view('index');
});


Route::get('/', function () {
    return view('registro');
})->name('registro');

Route::get('/', function () {
    return view('tienda');
})->name('tienda');

Route::get('/index', function(){
    return view('index');
})->name('index');




