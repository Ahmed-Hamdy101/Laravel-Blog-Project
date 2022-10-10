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

 Route::get('/',  'App\Http\Controllers\PostControllers@index' );

// create 
Route::get('/posts/create',  'App\Http\Controllers\PostControllers@create');
Route::post('/posts',  'App\Http\Controllers\PostControllers@store');



// for get  or show the data on url
Route::get('/posts/{id}',  'App\Http\Controllers\PostControllers@show');

// // for get  or show the data on url
Route::get('/posts/{id}/edit', 'App\Http\Controllers\PostControllers@edit');

// save it  or update it
Route::put('/posts/{id}',  'App\Http\Controllers\PostControllers@update');

//  delete it  
Route::get('/posts/{id}/delete',  'App\Http\Controllers\PostControllers@destory');
