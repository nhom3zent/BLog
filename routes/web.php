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


// Route::get('blogs','BlogController@index')->name('blogs.index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('users', 'UserController@index')->name('users.index');

Route::get('users/create','UserController@create')->name('users.create');

Route::post('users/store','UserController@store')->name('users.store');

Route::get('users/{blog_id}/edit','UserController@edit')->name('users.edit');

Route::put('users/{blog_id}','UserController@update')->name('users.update');

Route::get('users/{id}','UserController@show')->name('users.show');

Route::delete('users/{id}','UserController@destroy')->name('users.destroy');


Route::get('tags', 'TagsController@index')->name('tags.index');

Route::get('tags/create','TagsController@create')->name('tags.create');

Route::post('tags/store','TagsController@store')->name('tags.store');

Route::get('tags/{id}/edit','TagsController@edit')->name('tags.edit');

Route::put('tags/{id}','TagsController@update')->name('tags.update');

Route::get('tags/{id}','TagsController@show')->name('tags.show');

Route::delete('tags/{id}','TagsController@destroy')->name('tags.destroy');



Route::get('blogs/create','BlogController@create')->name('blogs.create');

Route::post('blogs/store','BlogController@store')->name('blogs.store');

Route::get('blog/{blog_id}/edit','BlogController@edit')->name('blogs.edit');

Route::put('blog/{blog_id}','BlogController@update')->name('blogs.update');

Route::get('blogs/{id}','BlogController@detail')->name('blogs.detail');

Route::delete('blogs/{id}','BlogController@destroy')->name('blogs.destroy');

Route::group(['prefix' => 'blog'], function(){
	Route::get('','Admin\BlogController@index')->name('blog.index');
	Route::get('create','Admin\BlogController@create')->name('blog.create');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('admin.AdminBlog');