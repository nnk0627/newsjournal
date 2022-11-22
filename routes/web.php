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

Route::get('/', 'Frontend\PageController@index');

Route::get('post/{id}', 'Frontend\PageController@show');
Route::get('index/{id}', 'Frontend\PageController@index');
Route::get('about-us', 'Frontend\PageController@about');
Route::get('contact-us', 'Frontend\PageController@contact');
Route::get('blog', 'Frontend\PageController@blog');
Route::get('family/{id}', 'Frontend\PageController@family')->name('family');

// Route::put('index/family/{id}', 'Frontend\PageController@family');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', 'Auth\LoginController@logout');


Route::view('/admin', 'backend.layouts.master')->middleware('CheckAdmin');

Route::group(['prefix'=> 'admin', 'namespace' => 'Backend', 'middleware' => 'CheckAdmin'], function(){

//Site Logo & Name Route
Route::get('site', 'SiteController@index');
Route::get('site/create', 'SiteController@create');
Route::post('site', 'SiteController@store');
Route::get('site/{id}/edit', 'SiteController@edit');
Route::post('site/{id}/edit', 'SiteController@update');
Route::get('site/{id}/delete', 'SiteController@destroy');

//Slider Route
Route::get('slider', 'SliderController@index');
Route::get('slider/create', 'SliderController@create');
Route::post('slider', 'SliderController@store');
Route::get('slider/{id}/edit', 'SliderController@edit');
Route::post('slider/{id}/edit', 'SliderController@update');
Route::get('slider/{id}/delete', 'SliderController@destroy');


//Category Route
Route::get('category', 'CategoryController@index');
Route::get('category/create', 'CategoryController@create');
Route::post('category', 'CategoryController@store');
Route::get('category/{id}/edit', 'CategoryController@edit');
Route::post('category/{id}/edit', 'CategoryController@update');
Route::get('category/{id}/delete', 'CategoryController@destroy');

// Post Route

Route::get('post', 'PostController@index');
Route::get('post/create', 'PostController@create');
Route::post('post', 'PostController@store');
Route::get('post/{id}/edit', 'PostController@edit');
Route::post('post/{id}/edit', 'PostController@update');
Route::get('post/{id}/delete', 'PostController@destroy');

//User Route

Route::get('user', 'UserController@index');
Route::get('user/create', 'UserController@create');
Route::post('user', 'UserController@store');
Route::get('user/{id}/edit', 'UserController@edit');
Route::post('user/{id}/edit', 'UserController@update');
Route::get('user/{id}/delete', 'UserController@destroy');
Route::get('user/{id}/show', 'UserController@show');

// Profile Route

Route::get('user/profile', 'UserController@profile');

});
