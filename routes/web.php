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


Route::get('/dashboard', 'schoolSystemController@inbox');
Route::any('/', 'schoolSystemController@log');
Route::any('/reg', 'schoolSystemController@regis');
Route::get('/user-email-verification/{id}', 'schoolSystemController@email');
