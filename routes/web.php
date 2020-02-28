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

Route::get('/', function () {
    return view('welcome');
});
//main page
Route::get('/index', 'OwnerController@index');

//Owner
Route::get('/show/owner/{id}', 'OwnerController@show');
//DOG
Route::get('/show/{pet_id}', 'PetController@show');