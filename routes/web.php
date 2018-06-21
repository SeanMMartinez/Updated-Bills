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

//route for logout
Route::post('/logout', ['uses' => 'LoginController@logout', 'as' => 'logout']);

//if user is logged in, show homepage
Route::group(['middleware' => 'auth'], function(){
    Route::get('/announcements', function(){
        return view ('announcements.index');
    })->name('announcements');

    //chat
    Route::get('chat', 'MessageController@index')->name('chat.index');
    Route::get('chat/{id}', 'MessageController@show')->name('chat.show');
    Route::post('chat/getChat/{id}', 'MessageController@getChat');
    Route::post('chat/sendChat', 'MessageController@sendChat');

    //profile
    Route::get('profile', 'ProfileController@index')->name('profile.index');
});


//only administrator can access
Route::middleware('role:administrator')->group(function (){
    //employees
    Route::resource('employees', 'EmployeeController');

    //roles
    Route::resource('roles', 'RoleController');
    //rooms
    Route::resource('rooms', 'RoomController');
    //routes for bills
    Route::resource('bills','BillController');

    //personnel
    Route::resource('personnels','PersonnelController');

    //contract
    Route::resource('contract', 'ContractController');

    //violation
    Route::resource('violations', 'ViolationController');
});

//tenants
Route::resource('users', 'UserController');

//routes for announcement
Route::resource('announcements', 'AnnouncementController');

//Change Password
Route::get('changePass','UpdatePasswordController@showChangePassword');
Route::post('changePass','UpdatePasswordController@changePassword')->name('changePassword');





