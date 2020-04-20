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

Route::get('/', function () {

  $articles = App\News::latest()->get();
  return view('home', ['articles' => $articles]);
});

// ------- NEWS -------
Route::get('news', 'NewsController@index')->name('news.index');
Route::get('news/create', 'NewsController@create')->name('news.create');
Route::get('news/{id}/{slug}', 'NewsController@show')->name('news.show');
Route::get('news/{id}/edit', 'NewsController@edit')->name('news.edit');

Route::post('news', 'NewsController@store')->name('news.store');
Route::put('news/{id}', 'NewsController@update');
