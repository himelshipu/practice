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
/*Route::get('/home', function () {
    return view('welcome');
});*/

Route::get('/service', function () {
    return view('service');
});

Route::get('/about', function () {
    return view('about');
})->middleware('age');

Route::get('/all_contact', function () {
    return view('contact');
})->name('contact');


Route::get('/all_contact','ContactController@contact')->name('contact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
