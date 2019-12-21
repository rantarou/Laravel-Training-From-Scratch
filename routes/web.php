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

/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function(){
    return 'Hello World';
});

Route::get('/users/{id}', function($id){
    return 'This is user '. $id;
});
*/

Route::get('/', 'PagesController@index')->name('pageHome');
Route::get('/about', 'PagesController@about')->name('pageAbout');
Route::get('/services', 'PagesController@services')->name('pageServices');

Route::resource('posts', 'PostsController');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

