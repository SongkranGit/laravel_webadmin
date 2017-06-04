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

Route::get('/' , 'Frontend\HomeController@index');
Route::get('/home', 'Frontend\HomeController@index');
Route::get('/promotion', 'Frontend\PromotionController@index');
Route::get('/aboutus', 'Frontend\AboutUsController@index');
Route::get('/contactus', 'Frontend\ContactUsController@index');
Route::get('/ourservice', 'Frontend\OurServiceController@index');

Route::resource('/promotion', 'Frontend\PromotionController');
Route::resource('/aboutus', 'Frontend\AboutUsController');
Route::resource('/contactus', 'Frontend\ContactUsController');
Route::resource('/ourservice', 'Frontend\OurServiceController');

Route::get('admin/login', 'Backend\Auth\LoginController@showLoginForm');
//Route::get('admin', 'Backend\Auth\LoginController@showLoginForm');

Route::group(['middleware' => ['guest']], function () {

    Route::get('/getLogout', 'Backend\AuthController@getLogout');
    Route::post('admin/login', 'Backend\Auth\LoginController@login')->name('admin.login');

});

Route::group(['prefix' => 'admin','middleware' => ['admin']], function () {

    Route::resource('/user', 'Backend\UserController');
    Route::resource('/promotion', 'Backend\PromotionController');
    Route::resource('/slideshow', 'Backend\SlideshowController');
    Route::resource('/setting', 'Backend\SettingController');

   // Route::get('/login', 'Backend\Auth\LoginController@index');
    Route::get('/logout', 'Backend\Auth\LoginController@getLogout');
    Route::get('/dashboard', 'Backend\DashboardController@index');
    Route::get('/home', 'Backend\HomeController@index');

    Route::post('/user/loadUsersDataTable', 'Backend\UserController@loadUsersDataTable')->name('user.loadUsersDataTable');
});




