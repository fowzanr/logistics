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
Route::post('/add', 'AdminController@insert');
Route::get('/delete/{id}','AdminController@delete');
Route::get('/update/{id}','AdminController@update');
// Route::get('/select/{id}', 'AdminController@select');
Route::post('/updateed', 'AdminController@edit');
Route::get('/book/{id}', 'HomeController@book');

Route::post('/booknoww', 'HomeController@edit');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::GET('admin/home ','AdminController@index');
Route::GET('admin', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::POST('admin', 'Admin\LoginController@login');
Route::POST('admin-password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::GET('admin-password/reset','Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::POST('admin-password/reset','Admin\ResetPasswordController@reset'); 
Route::GET('admin-password/reset/{token}','Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');

Route::get('admin/show', 'AdminController@show')->name('show.page');
Route::get('admin/BookedCarList','AdminController@list')->name('show.RentList');

// Route::get('admin/show', 'AdminController@show');

