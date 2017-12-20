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
Route::resource('categories', 'CategoryController', ['except' => ['create']]);

Route::get('/', function(){
	return view('auth.register');
});


Route::get('contact','PagesController@getContact');

Route::get('about', 'PagesController@getAbout');

Route::get('home', 'PagesController@getIndex');

Route::get('posts', 'PostsController@index');

Route::get('posts/posts', 'PostsController@index');

Route::resource('posts', 'PostsController');



Auth::routes();


