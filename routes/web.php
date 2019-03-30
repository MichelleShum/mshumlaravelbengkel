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

Route::get('', function () { //'url' , function() 
    return view('welcome');
});

Auth::routes();

Route::get('/posts', 'PostController@index')->name('posts.index'); //send data ke homecontroller at method index
Route::get('/posts/create', 'PostController@create')->name('posts.create'); //click /posts/create hantar pergi le post controller function ialah create
Route::get('/posts/{post}/edit', 'PostController@edit')->name('posts.edit');
Route::post('/posts', 'PostController@store')->name('posts.store');
Route::post('/posts/{post}', 'PostController@update')->name('posts.update');
Route::post('/posts/{post}/delete', 'PostController@delete')->name('posts.delete');
//Route::get('/rocket','rocketcontroller@index')->name('rocket');