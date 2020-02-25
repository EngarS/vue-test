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
    return view('test');
});

Route::get('/users', function () {
    return view('users.users');
});
Route::get('/ajax-to-vue', function () {
    return view('ajaxvue');
});

Route::get('/start', 'StartController@index');
Route::get('/start/get-json', 'StartController@getJson');
//Route::get('/users', 'UserController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

