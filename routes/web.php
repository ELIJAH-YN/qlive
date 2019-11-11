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

Route::get('/','PageController@index');

Route::match(['get','post'],'/admin','Admin\AdminController@login');


 Route::group(['middleware'=>['auth']], function () {
    Route::get('/admin/dashboard', 'Admin\AdminController@dashboard');
    Route::get('/admin/settings', 'Admin\AdminController@settings');
    Route::get('/admin/check-pwd', 'Admin\AdminController@chkPassword');
    Route::match(['get', 'post'], '/admin/update-pwd', 'Admin\AdminController@updatePassword');

    //Categories Routes (Admin)
    Route::match(['get', 'post'], '/admin/add-category', 'CategoryController@addCategory');
    Route::match(['get','post'],'/admin/edit-category/{id}','CategoryController@editCategory');
    Route::match(['get','post'],'/admin/delete-category/{id}','CategoryController@deleteCategory');
    Route::get('/admin/view-categories','CategoryController@viewCategories');

    // Article Route (Admin)
     Route::match(['get','post'],'/admin/add-article','ArticleController@addArticle');
     Route::match(['get','post'],'/admin/edit-article/{id}','ArticleController@editArticle');
     Route::match(['get','post'],'/admin/add-article-att','ArticleController@addArticleAtt');
     Route::get('/admin/view-articles','ArticleController@viewArticles');
     Route::get('/admin/delete-article/{id}','ArticleController@deleteArticle');
     Route::get('/admin/delete-article-cover/{id}','ArticleController@deleteArticleCover');

     // Form Route (Admin)
     Route::get('/admin/view-form', 'FormController@viewForm');

 });

// //Model form
Route::get('/qlive/model-form','ModelformController@index');
Route::get('/qlive/model-search','ModelformController@show');
Route::get('/qlive/model-profile/{slug}','ModelformController@profile');
Route::match(['get','post'],'/qlive/add-model','ModelformController@addModel');

// Index page
Route::get('/qlive/innerpage-page/{slug}','PageController@innerpageIndex');
Route::get('/qlive/trending-page','PageController@trendingIndex');
Route::get('/qlive/search-page','PageController@searchIndex');
Route::get('/qlive/onlineform-page','PageController@onlineformIndex');
Route::get('/qlive/check-page','PageController@checkIndex');
Route::get('/qlive/modelcard-page','PageController@modelcardIndex');

Route::get('/logout', 'Admin\AdminController@logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
