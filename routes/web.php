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

Auth::routes();

//route for show login form
Route::get('/', 'LoginController@showLoginForm');

//route for login
Route::post('/login', ['uses' => 'LoginController@login', 'as' => 'login']);

//if user is logged in, show homepage
Route::group(['middleware' => 'auth'], function(){
    Route::get('/announcements', function(){
        return view ('announcements.index');
    })->name('announcements');

    //chat
    Route::get('chat', 'ChatController@index')->name('chat.index');
    Route::get('chat/{id}', 'ChatController@show')->name('chat.show');
    Route::post('chat/getChat/{id}', 'ChatController@getChat');
    Route::post('chat/sendChat', 'ChatController@sendChat');
});

//route for logout
Route::post('/logout', ['uses' => 'LoginController@logout', 'as' => 'logout']);



//only administrator can access
Route::middleware('role:administrator')->group(function (){
    Route::resource('users', 'UserController');
    Route::resource('employees', 'EmployeeController');
    Route::resource('roles', 'RoleController');
    Route::resource('rooms', 'RoomController');
    //routes for bills
    Route::resource('bills','BillController');
    Route::resource('personnels','PersonnelController');
});

//routes for announcement
Route::resource('announcements', 'AnnouncementController');





