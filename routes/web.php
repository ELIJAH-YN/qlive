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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::match(['get','post'],'/admin','Admin\AdminController@login');


Route::group(['middleware'=>['auth']], function () {
   Route::get('/admin/dashboard', 'Admin\AdminController@dashboard');
   Route::get('/admin/settings', 'Admin\AdminController@settings');
   Route::get('/admin/check-pwd', 'Admin\AdminController@chkPassword');
   Route::match(['get', 'post'], '/admin/update-pwd', 'Admin\AdminController@updatePassword');
});

Route::get('/logout', 'Admin\AdminController@logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
