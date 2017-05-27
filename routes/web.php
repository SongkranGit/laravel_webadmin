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

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['guest']], function () {
    Route::get('/' , 'Frontend\HomeController@index');
    Route::get('/admin/login', 'Auth\LoginController@index');
});

Route::group(['prefix' => 'admin','middleware' => ['admin']], function () {
    Route::post('logout', 'Auth\LoginController@getLogout');
    Route::get('/dashboard', 'Backend\DashboardController@index');
    Route::get('/home', 'Backend\HomeController@index');


    Route::resource('/user', 'Backend\UserController');
    Route::post('/user/loadUsersDataTable', 'Backend\UserController@loadUsersDataTable')->name('user.loadUsersDataTable');



    Route::resource('/promotion', 'Backend\PromotionController');
    Route::resource('/slideshow', 'Backend\SlideshowController');
    Route::resource('/setting', 'Backend\SettingController');
});




//Route::get('/role' , function (){
//
//    $user = \App\User::find(1);
//    $role = \App\Role::find(1);
//    $user->roles()->save($role);
//
//
//});


