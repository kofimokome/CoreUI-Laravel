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

Route::get('/', 'DashboardController@index')->name('home');
Route::get('/colors', 'DashboardController@colors')->name('colors');
Route::get('/typography', 'DashboardController@typography')->name('typography');
Route::get('/charts', 'DashboardController@charts')->name('charts');

Route::prefix('/base')->group(function () {
    Route::get('/breadcrumb', 'DashboardController@breadcrumb');
    Route::get('/cards', 'DashboardController@cards');
    Route::get('/carousel', 'DashboardController@carousel');
    Route::get('/collapse', 'DashboardController@collapse');
    Route::get('/forms', 'DashboardController@forms');
    Route::get('/jumbotron', 'DashboardController@jumbotron');
    Route::get('/list-group', 'DashboardController@listGroup');
    Route::get('/navs', 'DashboardController@navs');
});

Route::prefix('/buttons')->group(function () {

});

Route::prefix('/icons')->group(function () {

});

Route::prefix('/notifications')->group(function () {

});

Route::get('/500', 'DashboardController@error');
