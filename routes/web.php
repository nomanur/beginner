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

// Route::get('/', function () {
// 	return view('welcome');
// });

// Route::get('/blog', "BlogController@index")->name('blog');

// Route::get('/post', "PostController@index");

// Route::post('/post', "PostController@store");


// Route::get('/post/{id}', "PostController@edit");

// Route::put('postupdate', "PostController@update");

// Route::get('/post/{id}/delete', "PostController@delete")->name('delete');

//article
// Route::Resource('/article', 'articleController')->except('index', 'update');
// Route::Resource('/article', 'articleController')->only('index', 'update');
Route::Resource('/article', 'articleController');


// Route::get('/article', 'articleController@index')->name('article.index');
// Route::post('/article', 'articleController@store')->name('article.index');
// Route::delete('/article/{id}', 'articleController@destroy')->name('article.destroy');

//route

//controller

//method

//model -  connect to database
