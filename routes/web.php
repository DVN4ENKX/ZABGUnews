<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', 'App\Http\Controllers\MainController@home');

Route::get('/home', 'App\Http\Controllers\MainController@home')->name('home');

Route::get('/articles', 'App\Http\Controllers\MainController@articles');

Route::get('/news', 'App\Http\Controllers\NewsController@index');

Route::resource('news', 'App\Http\Controllers\NewsController');

Route::resource('news', 'App\Http\Controllers\MainController');

Route::post('/news/create', 'App\Http\Controllers\NewsController@store')->name('create')->middleware('auth');

Route::get('/newstext/{id}', 'App\Http\Controllers\NewsController@newsmaker')->name('newstext');

Route::get('/home/{search}', 'App\Http\Controllers\MainController@search')->name('newssearch');

Route::get('/search', 'App\Http\Controllers\MainController@search')->name('search');

Route::get('/adminred', 'App\Http\Controllers\MainController@adminred')->name('adminred')->middleware('auth');

Route::get('/newsupdate/{id}', 'App\Http\Controllers\NewsController@newsupdate')->name('newsupdate')->middleware('auth');

Route::post('/adminredpost/{id}', 'App\Http\Controllers\MainController@adminredpost')->name('adminredpost')->middleware('auth');

Route::get('/adminreddel/{id}', 'App\Http\Controllers\MainController@adminreddel')->name('adminreddel')->middleware('auth');

Route::get('/app','App\Http\Controllers\HomeController@app')->name('app');

Auth::routes();