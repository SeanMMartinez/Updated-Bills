<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Login API
Route::post('/login', 'API\LoginApiController@login');


Route::group(['middleware' => 'auth:api'], function (){
    //Announcement API
    //get all the list
    Route::get('/announcements', 'API\AnnouncementApiController@index');
    //show selected announcement
    Route::get('announcements/{announcement}', 'API\AnnouncementApiController@show');
});