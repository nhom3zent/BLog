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
use App\user;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/hoadz',function(){
	
});

Route::get('abc', function(){
	return view('Main');
});

Route::get('detail',function(){
	return view('detail');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
