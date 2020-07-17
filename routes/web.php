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
    return view('welcome');
});

Route::get('/car', 'CarController@allcars');
Route::get('/car/{id}', 'CarController@particularcar');
Route::get('/new', 'CarController@newcarform') ;
Route::post('/car', 'CarController@newcar');
