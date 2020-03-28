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
    Route::get('login',['uses' => "LoginController@index"])->name('login');
    Route::post('auth',['uses' => "LoginController@login"])->name('auth');
    Route::get('logout',['uses' => "LoginController@logout"])->name('logout');
});

Route::group(['namespace' => 'admin', 'prefix' => env('ADMIN_URI'), 'as' => 'admin.', 'middleware' => 'admin'], function () {
    Route::resource('users', 'UserControllers');
    Route::get('{alias}', ['uses' => "AdminController@index"])->name('page');
});


