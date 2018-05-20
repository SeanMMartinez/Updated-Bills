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

//route for login
Route::post('/login', ['uses' => 'LoginController@login', 'as' => 'login']);

//if user is logged in, show homepage
Route::group(['middleware' => 'auth'], function(){
    Route::get('/home', function(){
        return view ('home');
    })->name('home');
});

//route for logout
Route::post('/logout', 'LoginController@logout')->name('logout');
