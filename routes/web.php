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


Route::namespace('front')->as('front.')->group(function () {
    Route::get('/',['uses' => "FrontController@index"])->name('main');
});
Route::group(['namespace' => 'auth','prefix'=>env('ADMIN_URI'),'as'=>'admin.','middleware'=>'web'],function () {
    Route::get('/',['uses' => "LoginController@redirect"]);
    Route::get('login',['uses' => "LoginController@index"])->name('login');
    Route::post('auth',['uses' => "LoginController@login"])->name('auth');
    Route::get('logout',['uses' => "LoginController@logout"])->name('logout');
});

Route::group(['namespace' => 'admin', 'prefix' => env('ADMIN_URI'), 'as' => 'admin.', 'middleware' => 'admin'], function () {

    Route::resource('dashboard', 'DashboardController');
    Route::resource('menu', 'MenuController');
    Route::resource('products', 'ProductController');
    Route::resource('setting', 'SettingController');
    Route::resource('users', 'UserController');
    Route::resource('permissions', 'PermissionController');
    Route::resource('roles', 'RoleController');

});


