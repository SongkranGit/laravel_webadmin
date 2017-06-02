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

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/' , 'Frontend\HomeController@index');
Route::get('/logout', 'Auth\LoginController@logout');

Route::group(['middleware' => ['guest']], function () {

    Route::get('/admin/login', 'Auth\LoginController@index');
    Route::get('/getLogout', 'AuthController@getLogout');
});

Route::group(['prefix' => 'admin','middleware' => ['admin']], function () {

    Route::get('/logout', 'Backend\Auth\LoginController@getLogout');
    Route::get('/dashboard', 'Backend\DashboardController@index');
    Route::get('/home', 'Backend\HomeController@index');


    Route::resource('/user', 'Backend\UserController');
    Route::post('/user/loadUsersDataTable', 'Backend\UserController@loadUsersDataTable')->name('user.loadUsersDataTable');



    Route::resource('/promotion', 'Backend\PromotionController');
    Route::resource('/slideshow', 'Backend\SlideshowController');
    Route::resource('/setting', 'Backend\SettingController');
});




