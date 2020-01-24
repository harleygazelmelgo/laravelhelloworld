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

Route::get('/home', 'helloworldcontroller@home');

Route::get('/aboutUs', 'helloworldcontroller@aboutUs');

Route::get('/contactUs', 'helloworldcontroller@contactUs');

Route::get('/oldPage', function () {
    return view('welcome');
});
