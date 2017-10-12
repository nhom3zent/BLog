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
Route::get('aa', function(){
	echo "string";
});

Route::get('/hoadz',function(){
	
});

Route::get('abc', function(){
	return view('Main');
});

Route::get('blogs','BlogController@index')->name('blogs.index');

Route::get('blogs/{id}','BlogController@detail')->name('blogs.detail');

// Route::get('detail',function(){
// 	return view('detail');
// });