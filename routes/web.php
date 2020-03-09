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

Route::get('/','FrontController@home')->name('travel.home');

Route::get('guide','FrontController@guide')->name('travel.guide');

//Route::get('login','FrontController@showLoginForm')->name('travel.login');

Route::get('blog','FrontController@showBlog')->name('travel.tour-blog');

Route::get('reservation','FrontController@makeReservation')->name('travel.reservation');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
