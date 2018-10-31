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

Route::get('/member', function () {
    return view('member');
});

Route::get('/doctor', function () {
    return view('auth/doctor');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/doctor', 'RegisterController@doctor')->name('doctor');
