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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Administration routes
Route::prefix('admin')->middleware('admin')->group(function () {

    Route::get('/', 'Administration\DashboardController@index');
    Route::get('/users', 'Administration\UsersController@index');
    Route::get('/vehicles', 'Administration\VehiclesController@index');

    // Vue routes
    Route::prefix('/vue')->group(function () {

        Route::prefix('/users')->middleware('can:access-users')->group(function () {
            Route::get('/', 'Administration\UsersController@list');
        });
    });
});
