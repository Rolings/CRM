<?php
/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/


Route::get('/',['uses' => "LoginController@redirect"]);
Route::get('login',['uses' => "LoginController@index"])->name('login');
Route::post('auth',['uses' => "LoginController@login"])->name('auth');
Route::get('logout',['uses' => "LoginController@logout"])->name('logout');
