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

Route::get('/login', 'user_controller@login');
Route::get('/register','user_controller@register');
Route::post('/users','user_controller@users');
Route::post('/getUser','user_controller@getUser');
Route::get('/{username}','user_controller@partuser');
Route::post('/getPass/{username}','user_controller@getPass');
//Route::get('/hello/{username}','user_controller@getPass');