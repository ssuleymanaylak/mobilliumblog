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

Auth::routes();

Route::get('/home', 'BlogsController@index')->name('home');

Route::get('/admin', function(){
	echo "Hello Admin";
})->middleware('auth','admin');


Route::get('/moderator', function(){
	echo "Hello Moderator";
})->middleware('auth','moderator');

Route::get('/writer', function(){
	echo "Hello Writer";
})->middleware('auth','writer');

Route::get('/reader', function(){
	echo "Hello Reader";
})->middleware('auth','reader');

Route::get('blogs','BlogsController@index')->name('blog-index');
Route::get('blogs/create','BlogsController@create')->name('blog-create');
Route::post('blogs','BlogsController@store')->name('blog-store'); 
Route::get('blogs/{blog}/edit','BlogsController@edit')->name('blog-edit'); 
Route::patch('blogs/{blog}','BlogsController@update')->name('blog-update');
Route::delete('blogs/{blog}','BlogsController@destroy')->name('blog-destroy');

