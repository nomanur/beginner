<?php

use Illuminate\Support\Facades\Route;

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

//get, post, pur or patch, delete

// Route::get('/test', function () {
//     return view('welcome');
// });

Route::get('/', function () {
	return view('welcome');
});

Route::get('/blog', "BlogController@index")->name('blog');

Route::get('/post', "PostController@index");

Route::post('/post', "PostController@store");

//Route::get('/singlepost/{id}', "PostController@single");
Route::get('/post/{id}', "PostController@edit");

Route::put('postupdate', "PostController@update");

Route::get('/post/{id}/delete', "PostController@delete")->name('delete');
//route

//controller

//method

//model -  connect to database
