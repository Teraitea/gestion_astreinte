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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// List all the users
Route::get('/home/users', 'UserController@listUsers');
// Show only one user
Route::get('/home/user/{userId}', 'UserController@listUser');
// Edit one user
Route::get('/home/user/{userId}/edit', 'UserController@editUser');
Route::post('/home/user/{userId}/edit', 'UserController@update');
// Delete one user
Route::get('/home/user/{userId}/delete', 'UserController@destroy');

