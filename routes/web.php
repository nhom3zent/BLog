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


Route::get('abc', function(){
	return view('Main');
});

Route::get('blogs','BlogController@index')->name('blogs.index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('users', 'UserController@index');

Route::get('blogs/{id}','BlogController@detail')->name('blogs.detail');
