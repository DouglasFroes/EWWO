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

Route::get('/', 'MainController@home');
Route::get('/valores', 'MainController@valores');
Route::get('/contatos', 'MainController@contact');
Route::get('/sobre', 'MainController@about');




Route::get('/home2', function () {
    return view('home');
});