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

Route::get('/','aldowardanaController@Home');

Route::get('/portfolio','aldowardanaController@Portfolio');

Route::get('/about','adietController@About');

Route::get('/product','ronaldoController@Product');

Route::get('/services','adietController@Services');

