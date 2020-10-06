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

Route::get('/', 'HomeController@index');

Route::get('/about', 'AboutController@index');

Route::get('/contact', 'ContactController@index');
Route::get('/contact/thankyou', 'ContactController@thankyou');
Route::get('/contact/create', 'ContactController@create');
Route::post('/contact', 'ContactController@store');
Route::get('/contact/{contact}/edit', 'ContactController@edit');
Route::put('/contact/{contact}', 'ContactController@update');
Route::delete('/contact/{contact}', 'ContactController@destroy');


Auth::routes();
