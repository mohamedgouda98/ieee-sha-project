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

Route::get('/', 'HomeController@home');
Route::get('/regstrtion' , 'regesterController@start');
Route::get('/vertify' , 'regesterController@vertify');

 Route::get('/', function () {
     return view('emails');
 });


Route::get('/email' , 'EmailController@create')->name('create');
Route::post('/store_mail' , 'EmailController@store')->name('store');

Route::get('/emails_data' , 'EmailController@emails_data');