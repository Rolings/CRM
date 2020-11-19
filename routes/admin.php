<?php
/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::resource('dashboard', 'DashboardController');
Route::resource('menu', 'MenuController');
Route::resource('products', 'ProductController');
Route::resource('setting', 'SettingController');
Route::resource('users', 'UserController');
Route::resource('permissions', 'PermissionController');
Route::resource('roles', 'RoleController');
