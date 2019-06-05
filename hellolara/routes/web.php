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
Route::get('hello', function () {
    return view('welcome');
});

Route::get('schools', 'HomeController@schools');
Route::get('parents', 'HomeController@parents')->middleware('auth');
Route::get('hospitals','HomeController@hospitals');
Route::get('userform', 'HomeController@userform');
Route::get('kanyamat', 'HomeController@kanyamat');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');





