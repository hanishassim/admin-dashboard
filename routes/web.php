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

// Route::prefix('auth')->group(function () {
    Route::any('login', 'Auth\LoginController@login')->name('login');

    Route::get('register', 'Auth\RegisterController@register')->name('register');
    Route::post('resetuserpassword', 'UserController@resetUserPassword');

    Route::post('logout', 'Auth\LoginController@logout')->name('logout');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('profile', function () {
    return view('profile');
})->name('profile');

Route::get('table', function () {
    return view('table');
})->name('table');

Route::get('map', function () {
    return view('map');
})->name('map');

Route::get('notification', function () {
    return view('notifications');
})->name('notification');

Route::get('carousel', function () {
    return view('carousel');
})->name('carousel');

Route::get('lightbox', function () {
    return view('lightbox');
})->name('lightbox');