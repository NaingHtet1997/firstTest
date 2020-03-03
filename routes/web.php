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

include __DIR__."/admin/route.php";
Route::get('/','MainController@index');

Route::resource('blog','BlogController');
// Route::resource('blog/{id}','BlogController');

Route::resource('tourprogram','TourprogramController');
// Route::resource('tourprogram/{id}','TourprogramController');

Route::resource('inspiration','InspirationController');

Route::post('ckeditor/image_upload', 'MainController@upload')->name('upload');

Route::get("admin/login","Auth\LoginController@showLoginForm")->name("login");

Route::post("admin/login", "Auth\LoginController@login");
Route::post("logout", "Auth\LoginController@logout")->name("logout");

Route::get("lang/{lang}", "MainController@language")->name("language");

Route::get('testing',function(){return "OK";});





